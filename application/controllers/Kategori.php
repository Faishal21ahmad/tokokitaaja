<?php
class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['kategori'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
        $data['userName'] = $this->session->userdata('userName');
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
        $this->template->load('layout_admin', 'admin/kategori/index', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('namaKategori', 'NamaKategori', 'required');
        $data['userName'] = $this->session->userdata('userName');
        if ($this->form_validation->run() == false) {
            $this->template->load('layout_admin', 'admin/kategori/form_add', $data);
        } else {
            $namaKategori = $this->input->post('namaKategori');
            $dataInsert = array('namakat' => $namaKategori);
            $this->Mcrud->insert('tbl_kategori', $dataInsert);
            redirect('kategori');
        }
    }

    public function getid($id)
    {
        $dataWhere = array('idkat' => $id);
        $data['userName'] = $this->session->userdata('userName');
        $data['kategori'] = $this->Mcrud->get_by_id('tbl_kategori', $dataWhere)->row_object();
        $this->template->load('layout_admin', 'admin/kategori/form_edit', $data);
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $data['userName'] = $this->session->userdata('userName');
        $namaKategori = $this->input->post('namaKategori');
        $dataUpdate = array('namakat' => $namaKategori);
        $this->Mcrud->update('tbl_kategori', $dataUpdate, 'idkat', $id);
        redirect('kategori');
    }
    public function delkat($id)
    {
        $where = array('idkat' => $id);
        $this->Mcrud->hapus_data($where, 'tbl_kategori');
        redirect('kategori');
    }
}
