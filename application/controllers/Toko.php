<?php
class Toko extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');
    }

    public function index()
    {
        $data = $this->Mcrud->get_all_data('tbl_toko')->result();
        if ($data != NULL) {
            $i = 0;
            foreach ($data as $o) {
                $data['toko'][$i] = array(
                    'idToko' => $o->idToko,
                    'idKonsumen' => $this->Mcrud->get_detail('tbl_member', 'idKonsumen', $o->idKonsumen, 'idKonsumen'),
                    'namaToko' => $o->namaToko,
                    'logo' => $o->logo,
                    'deskripsi' => $o->deskripsi,
                    'statusAktif' => $o->statusAktif
                );
                $data['toko'][$i] = (object)$data['toko'][$i];
                $i++;
            }
        } else {
            $data['toko'] = array();
        }
        $data['userName'] = $this->session->userdata('userName');
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
        $this->template->load('layout_admin', 'admin/toko/index', $data);
    }

    public function add()
    {
        $data['userName'] = $this->session->userdata('userName');
        $data['toko'] = $this->Mcrud->get_all_data('tbl_toko')->result();
        $data['member'] = $this->Mcrud->get_all_data('tbl_member')->result();
        $this->template->load('layout_admin', 'admin/toko/form_add', $data);
    }

    public function getid($id)
    {
        $dataWhere = array('idToko' => $id);
        $result = $this->Mcrud->get_by_id('tbl_toko', $dataWhere)->row_object();
        $data['userName'] = $this->session->userdata('userName');
        $data['toko'] = array(
            'idToko' => $result->idToko,
            'idKonsumen' => $this->Mcrud->get_detail('tbl_member', 'idKonsumen', $result->idKonsumen, 'idKonsumen'),
            'namaToko' => $result->namaToko,
            'logo' => $result->logo,
            'deskripsi' => $result->deskripsi,
            'statusAktif' => $result->statusAktif
        );
        $data['toko'] = (object)$data['toko'];
        $data['member'] = $this->Mcrud->get_all_data('tbl_member')->result();
        $this->template->load('layout_admin', 'admin/toko/form_edit', $data);
    }

    public function save()
    {
        $data = $this->input->post();
        $dataInsert = array(
            'idToko' => $data['idToko'],
            'idKonsumen' => $data['idKonsumen'],
            'namaToko' => $data['namaToko'],
            'logo' => $data['logo'],
            'deskripsi' => $data['deskripsi'],
            'statusAktif' => $data['statusAktif']
        );
        $this->Mcrud->insert('tbl_toko', $dataInsert);
        redirect('toko');
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $idToko = $this->input->post('idToko');
        $idKonsumen = $this->input->post('idKonsumen');
        $namaToko = $this->input->post('namaToko');
        $logo = $this->input->post('logo');
        $deskripsi = $this->input->post('deskripsi');
        $statusAktif = $this->input->post('statusAktif');
        $dataUpdate = array(
            'idToko' => $idToko,
            'idKonsumen' => $idKonsumen,
            'namaToko' => $namaToko,
            'logo' => $logo,
            'deskripsi' => $deskripsi,
            'statusAktif' => $statusAktif
        );
        $this->Mcrud->update('tbl_toko', $dataUpdate, 'idToko', $id);
        redirect('toko');
    }
    public function del($id)
    {
        $where = array('idToko' => $id);
        $this->Mcrud->hapus_data($where, 'tbl_toko');
        redirect('toko');
    }
}
