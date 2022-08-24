<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mfrontend');
        $this->load->model('Mtoko');
        $this->load->model('Mfavorit');
        $this->load->model('Mmember');
    }
    public function index()
    {
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $data['produkterbaru'] = $this->Mfrontend->get_all_produk_terbaru()->result();
        $data['produkfavorit'] = $this->Mfavorit->get_all_produk_terfavorit_4()->result();
        $data['produk'] = $this->Mfrontend->get_all_produk()->result();
        //$data['member'] = $this->db->get_where('tbl_member', ['username' => $this->session->userdata('username')])->row_array();
        //$this->template->load('layout_frontend', 'frontend/home', $data);
        $data['username'] = $this->session->userdata('username');
        $data['id'] = $this->session->userdata('id');
        $data['title'] = 'Home';
        if (empty($data['id'])) {
            $this->template->load('layout_frontend', 'frontend/home', $data);
        } else {
            $this->template->load('layout_frontend_user_login', 'frontend/home', $data);
        }
    }
    public function register()
    {
        $data['kota'] = $this->Mfrontend->get_all_kota()->result();
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $data['title'] = 'Register';
        $this->template->load('layout_frontend', 'frontend/register', $data);
    }
    public function login()
    {
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $data['title'] = 'Login';
        $this->template->load('layout_frontend', 'frontend/login', $data);
    }
    public function actreg()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('namaKonsumen', 'NamaKonsumen', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('password_confirm', 'Password Confirm', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('tlpn', 'tlpn', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('pesan', validation_errors());
            redirect('home/register');
        } else {
            $namaKonsumen = $this->input->post('namaKonsumen');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $alamat = $this->input->post('alamat');
            $idKota = $this->input->post('idKota');
            $tlpn = $this->input->post('tlpn');
            $data_insert = array(
                'username' => $username,
                'password' => $password,
                'namaKonsumen' => $namaKonsumen,
                'alamat' => $alamat,
                'idKota' => $idKota,
                'email' => $email,
                'tlpn' => $tlpn,
                'statusAktif' => 'Y'
            );
            $this->Mfrontend->insertreg('tbl_member', $data_insert);
            redirect('home/login');
        }
    }

    // Menampilkan detail Produk
    public function depro($id, $idToko)
    {
        $data['ids'] = array('idProduk' => $id);
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $data['produk'] = $this->Mmember->get_produk_by_id($id)->row_object();
        $data['namaToko'] = $this->Mtoko->get_toko($idToko)->row_object();
        $data['username'] = $this->session->userdata('username');
        $data['id'] = $this->session->userdata('id');
        $Toko = $this->Mtoko->get_toko($idToko)->row_object();
        $data['title'] = "Detail Produk | " . $Toko->namaToko;

        if (empty($data['id'])) {
            $this->template->load('layout_frontend', 'frontend/depro', $data);
        } else {
            $data['produkfavoritA'] = $this->Mfavorit->get_favorit_by_idKonsumen_idBarang($id)->row_object();
            $this->template->load('layout_frontend_user_login', 'frontend/depro', $data);
        }
    }
    //Proses Input Favorit
    public function inputFavorit($idProduk,  $idToko)
    {
        $id = $this->session->userdata('id');
        $data_favorit = array(
            'idKonsumen' => $id,
            'idProduk' => $idProduk
        );
        $this->Mfavorit->insert_favorit($data_favorit);
        redirect('home/depro/' . $idProduk . "/" . $idToko);
    }
    //Proses Delete Favorit
    public function deleteFavorit($id, $idProduk,  $idToko)
    {
        $where = array('idFavorit' => $id);
        $this->Mfavorit->delete_favorit($where, 'tbl_favorit');
        redirect('home/depro/' . $idProduk . "/" . $idToko);
    }
}
