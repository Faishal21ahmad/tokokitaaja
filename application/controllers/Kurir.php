<?php
class Kurir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['kurir'] = $this->Mcrud->get_all_data('tbl_kurir')->result();
        $data['userName'] = $this->session->userdata('userName');
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
        $this->template->load('layout_admin', 'admin/kurir/index', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('namaKurir', 'NamaKurir', 'required');

        if ($this->form_validation->run() == false) {
            $this->template->load('layout_admin', 'admin/kurir/form_add');
        } else {
            $namaKurir = $this->input->post('namaKurir');
            $dataInsert = array('namaKurir' => $namaKurir);
            $this->Mcrud->insert('tbl_kurir', $dataInsert);
            redirect('kurir');
        }
    }

    public function getid($id)
    {
        $dataWhere = array('idKurir' => $id);
        $data['kurir'] = $this->Mcrud->get_by_id('tbl_kurir', $dataWhere)->row_object();
        $this->template->load('layout_admin', 'admin/kurir/form_edit', $data);
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $namaKurir = $this->input->post('namaKurir');
        $dataUpdate = array('namaKurir' => $namaKurir);
        $this->Mcrud->update('tbl_kurir', $dataUpdate, 'idKurir', $id);
        redirect('kurir');
    }
    public function delKurir($id)
    {
        $where = array('idKurir' => $id);
        $this->Mcrud->hapus_data($where, 'tbl_kurir');
        redirect('kurir');
    }
}
