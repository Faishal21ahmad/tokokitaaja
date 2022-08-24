<?php
class Kota extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['kota'] = $this->Mcrud->get_all_data('tbl_kota')->result();
        $data['userName'] = $this->session->userdata('userName');
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
        $this->template->load('layout_admin', 'admin/kota/index', $data);
    }
    public function add()
    {
        $this->form_validation->set_rules('namaKota', 'NamaKota', 'required');
        $data['userName'] = $this->session->userdata('userName');

        if ($this->form_validation->run() == false) {
            $this->template->load('layout_admin', 'admin/kota/form_add', $data);
        } else {
            $namaKota = $this->input->post('namaKota');
            $dataInsert = array('namaKota' => $namaKota);
            $this->Mcrud->insert('tbl_kota', $dataInsert);
            redirect('kota');
        }
    }
    public function getid($id)
    {
        $dataWhere = array('idKota' => $id);
        $data['userName'] = $this->session->userdata('userName');

        $data['kota'] = $this->Mcrud->get_by_id('tbl_kota', $dataWhere)->row_object();
        $this->template->load('layout_admin', 'admin/kota/form_edit', $data);
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $namaKota = $this->input->post('namaKota');
        $dataUpdate = array('namaKota' => $namaKota);
        $this->Mcrud->update('tbl_kota', $dataUpdate, 'idKota', $id);
        redirect('kota');
    }
    public function delkota($id)
    {
        $where = array('idKota' => $id);
        $this->Mcrud->hapus_data($where, 'tbl_kota');
        redirect('kota');
    }
}
