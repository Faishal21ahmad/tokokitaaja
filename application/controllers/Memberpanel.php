<?php

class Memberpanel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mfrontend');
        $this->load->model('Mmember');
        $this->load->model('Mfavorit');
        $this->load->model('Mtoko');
        $this->load->library('cart');
    }

    public function act_login()
    {
        $u = $this->input->post('username');
        $p = $this->input->post('password');
        $cek = $this->Mmember->cek_login($u, $p)->num_rows();
        $result = $this->Mmember->cek_login($u, $p)->result();
        if ($cek == 1) {
            $data_session = array(
                'username' => $u,
                'id' => $result[0]->idKonsumen,
                'status' => 'login'
            );
            $this->session->set_userdata($data_session);
            redirect('memberpanel');
        } else {
            $this->session->set_flashdata('pesan', 'Username / Password Tidak Sesuai');
            redirect('home/login');
        }
    }

    public function index()
    {
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $data['username'] = $this->session->userdata('username');
        $data['id'] = $this->session->userdata('id');
        $data['title'] = 'Panel Member';
        if (empty($data['id'])) {
            redirect('home/login');
        } else {
            $this->template->load('layout_frontend_user_login', 'frontend/user_menu', $data);
        }
    }

    public function transaksi()
    {
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $data['jml_trans_bb'] = $this->Mmember->jml_transaksi_belum_bayar();
        $data['transaksi'] = $this->Mmember->grt_trans_by_konsumen()->result();
        $this->template->load('layout_frontend', 'frontend/member_transaksi', $data);
    }

    public function riwayat_transaksi()
    {
    }

    public function toko()
    {
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $data['toko'] = $this->Mmember->get_toko_by_member()->result_array();
        $data['username'] = $this->session->userdata('username');
        $data['id'] = $this->session->userdata('id');
        $data['title'] = 'List Toko';
        if (empty($data['id'])) {
            redirect('home/login');
        } else {
            $this->template->load('layout_frontend_user_login', 'frontend/member_toko', $data);
        }
    }

    public function create_toko()
    {
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $data['username'] = $this->session->userdata('username');
        $data['id'] = $this->session->userdata('id');
        $data['status'] = $this->session->userdata('status');
        $data['title'] = 'Buat Toko';
        if (empty($data['id'])) {
            redirect('home/login');
        } else {
            $this->template->load('layout_frontend_user_login', 'frontend/create_toko.php', $data);
        }
    }

    public function insert_toko()
    {
        $id = $this->session->userdata('id');
        $nama_toko  = $this->input->post('nama_toko');
        $deskripsi  = $this->input->post('deskripsi');
        $logo    = $_FILES['logo'];

        $config['upload_path'] = './assets/logo';
        $config['allowed_types'] = 'jpg|png|jpeg';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('logo')) {
            echo "Upload Gagal";
            die();
        } else {
            $logo = $this->upload->data('file_name');
        }

        $data_insert = array(
            'idKonsumen' => $id,
            'namaToko' => $nama_toko,
            'logo' => $logo,
            'deskripsi' => $deskripsi,
            'statusAktif' => 'Y'
        );
        $this->Mmember->insert_toko($data_insert);
        redirect('memberpanel/toko');
    }
    public function ubah_profil()
    {
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home/login');
    }
    public function cart_tambah($idproduk)
    {
        $status = $this->session->userdata('status');
        if (empty($status)) {
            redirect('home/login');
        } else {
            $jml_keranjang = count($this->cart->contents());
            if (empty($jml_keranjang)) {
                $data_produk = $this->Mmember->get_produk_by_id($idproduk)->row_object();
                $insert_cart = array(
                    'id' => $idproduk,
                    'idToko' => $data_produk->idToko,
                    'name' => $data_produk->namaProduk,
                    'price' => $data_produk->harga,
                    'qty' => 1
                );
                $this->cart->insert($insert_cart);
                redirect('member/keranjang');
            } else {
                $idToko = '';
                if ($cart = $this->cart->contents()) {
                    foreach ($cart as $item) {
                        $idToko = $item['idToko'];
                    }
                }

                $data_produk = $this->Mmember->get_produk_by_id($idproduk)->row_object();
                if ($idToko == $data_produk->idToko) {
                    $data_produk = $this->Mmember->get_produk_by_id($idproduk)->row_object();
                    $insert_cart = array(
                        'id' => $idproduk,
                        'idToko' => $data_produk->idToko,
                        'name' => $data_produk->namaProduk,
                        'price' => $data_produk->harga,
                        'gambar' => $data_produk->foto,
                        'qty' => 1
                    );
                    $this->cart->insert($insert_cart);
                    redirect('member/keranjang');
                } else {
                    echo "Barang harus dari toko yang sama";
                }
            }
        }
    }

    public function hapus_cart($rowid)
    {
        $data_hapus = array('rowid' => $rowid, 'qty' => 0);
        $this->cart->update($data_hapus);
        redirect('member/keranjang');
    }

    public function keranjang()
    {
        $data['kategori'] = $this->mfrontend->get_all_kategori()->result();
        $this->template->load('layout_frontend', 'frontend/keranjang', $data);
    }

    public function selesai_belanja()
    {
        $idToko = '';
        if ($cart = $this->cart->contents()) {
            foreach ($cart as $item) {
                $idToko = $item['idToko'];
            }
        }
        $data_pembeli = array(
            'idKonsumen' => $this->session->userdata('id'),
            'tglOrder' => date('Y-m-d'),
            'idToko' => $idToko,
            'statusOrder' => 'Belum Bayar'
        );
        $idTerakhir = $this->Mmember->insert_order($data_pembeli);

        if ($cart = $this->cart->contents()) {
            foreach ($cart as $item) {
                $data_detail = array(
                    'idOrder' => $idTerakhir,
                    'idProduk' => $item['id'],
                    'jumlah' => $item['qty'],
                    'harga' => $item['price']
                );
                $this->Mmember->insert_detail_order($data_detail);
            }
        }
        $this->cart->destroy();
        redirect('member/transksi');
    }
    // Menampilakn List Favorit di dashboard member
    public function favoritlist()
    {
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $data['username'] = $this->session->userdata('username');
        $data['id'] = $this->session->userdata('id');
        $data['title'] = 'Favorit List';
        $data['list'] = $this->Mfavorit->get_favorit_by_idKonsumen()->result();
        if (empty($data['id'])) {
            redirect('home/login');
        } else {
            $this->template->load('layout_frontend_user_login', 'frontend/listfavorit', $data);
        }
    }
    // input favorit
    public function inputFavorit($idProduk,  $idToko)
    {
        $id = $this->session->userdata('id');
        $data_favorit = array(
            'idKonsumen' => $id,
            'idProduk' => $idProduk
        );
        $this->Mfavorit->insert_favorit($data_favorit);
        redirect('memberToko/detail/' . $idProduk . "/" . $idToko);
    }
    // delete favorit
    public function deleteFavorit($id, $idProduk,  $idToko)
    {
        $where = array('idFavorit' => $id);
        $this->Mfavorit->delete_favorit($where, 'tbl_favorit');
        redirect('memberToko/detail/' . $idProduk . "/" . $idToko);
    }
}
