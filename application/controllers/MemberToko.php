<?php

class MemberToko extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mfrontend');
        $this->load->model('Mtoko');
        $this->load->model('Mcrud');
        $this->load->model('Mmember');
        $this->load->model('Mfavorit');
        $this->load->library('form_validation');
    }
    public function main($idToko)
    {
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $data['namaToko'] = $this->Mtoko->get_toko($idToko)->row_object();
        $Toko = $this->Mtoko->get_toko($idToko)->row_object();
        $data['username'] = $this->session->userdata('username');
        $data['id'] = $this->session->userdata('id');
        $data['title'] = "Toko " . $Toko->namaToko;
        if (empty($data['id'])) {
            redirect('home/login');
        } else {
            $this->template->load('layout_frontend_user_login', 'frontend/toko_home', $data);
        }
    }
    public function produk($idToko)
    {
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $data['namaToko'] = $this->Mtoko->get_toko($idToko)->row_object();
        $data['produk'] = $this->Mtoko->get_produk_by_toko($idToko)->result_array();
        $Toko = $this->Mtoko->get_toko($idToko)->row_object();
        $data['title'] = 'List Produk | ' . $Toko->namaToko;
        $data['username'] = $this->session->userdata('username');
        $data['id'] = $this->session->userdata('id');
        if (empty($data['id'])) {
            redirect('home/login');
        } else {
            $this->template->load('layout_frontend_user_login', 'frontend/toko_produk', $data);
        }
    }
    public function create_produk($idToko)
    {
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $data['namaToko'] = $this->Mtoko->get_toko($idToko)->row_object();
        $Toko = $this->Mtoko->get_toko($idToko)->row_object();
        $data['idToko'] = $idToko;
        $data['username'] = $this->session->userdata('username');
        $data['id'] = $this->session->userdata('id');
        $data['title'] = 'Insert Produk | ' . $Toko->namaToko;
        if (empty($data['id'])) {
            redirect('home/login');
        } else {
            $this->template->load('layout_frontend_user_login', 'frontend/toko_create_produk', $data);
        }
    }

    public function insert_produk($idToko)
    {
        $idKat = $this->input->post('idKat');
        $idtoko = $idToko;
        $namaProduk = $this->input->post('namaProduk');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $berat = $this->input->post('berat');
        $deskripsiProduk = $this->input->post('deskripsiProduk');
        $foto    = $_FILES['foto'];

        $config['upload_path'] = './assets/produk';
        $config['allowed_types'] = 'jpg|png|jpeg';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            echo var_dump($idKat, $idtoko, $namaProduk, $harga, $stok, $berat, $deskripsiProduk, $foto);
            echo "Upload Gagal";
            die();
        } else {
            $foto = $this->upload->data('file_name');
        }
        $data_insert = array(
            'idKat' => $idKat,
            'idToko' => $idtoko,
            'namaProduk' => $namaProduk,
            'foto' => $foto,
            'harga' => $harga,
            'stok' => $stok,
            'berat' => $berat,
            'deskripsiProduk' => $deskripsiProduk
        );
        $this->Mtoko->insert_produk($data_insert);
        redirect('memberToko/produk/' . $idToko);
    }

    public function add_kategori($idToko)
    {
        $data['namaToko'] = $this->Mtoko->get_toko($idToko)->row_object();
        $data['username'] = $this->session->userdata('username');
        $data['id'] = $this->session->userdata('id');
        $data['title'] = "Tambah Kategori";
        if (empty($data['id'])) {
            redirect('home/login');
        } else {
            $this->template->load('layout_frontend_user_login', 'frontend/add_kategori', $data);
        }
    }
    public function adE($idToko)
    {
        $data['namaToko'] = $this->Mtoko->get_toko($idToko)->row_object();
        $this->form_validation->set_rules('namaKategori', 'NamaKategori', 'required');
        $data['username'] = $this->session->userdata('username');
        if ($this->form_validation->run() == false) {
            $this->template->load('layout_frontend_user_login', 'frontend/add_kategori', $data);
        } else {
            $namaKategori = $this->input->post('namaKategori');
            $dataInsert = array('namakat' => $namaKategori);
            $this->Mcrud->insert('tbl_kategori', $dataInsert);
            redirect('memberToko/create_produk/' . $idToko);
        }
    }

    public function detail($id, $idToko)
    {
        $data['ids'] = array('idProduk' => $id);
        $data['produk'] = $this->Mmember->get_produk_by_id($id)->row_object();
        $data['namaToko'] = $this->Mtoko->get_toko($idToko)->row_object();
        $data['username'] = $this->session->userdata('username');
        $data['id'] = $this->session->userdata('id');
        $Toko = $this->Mtoko->get_toko($idToko)->row_object();
        $data['title'] = "Detail Produk | " . $Toko->namaToko;
        if (empty($data['id'])) {
            redirect('home/login');
        } else {
            $data['produkfavoritA'] = $this->Mfavorit->get_favorit_by_idKonsumen_idBarang($id)->row_object();
            $this->template->load('layout_frontend_user_login', 'frontend/deproto', $data);
        }
    }
    public function edit_produk()
    {
    }
    public function save_edit_produk()
    {
    }
    public function delete_produk($id, $idToko)
    {
        $where = array('idProduk' => $id);
        $this->Mtoko->hapus_produk($where, 'tbl_produk');
        redirect('memberToko/produk/' . $idToko);
    }
    public function transaksi()
    {
    }
}
