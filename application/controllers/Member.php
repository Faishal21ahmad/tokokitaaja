<?php
class Member extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = $this->Mcrud->get_all_data('tbl_member')->result();

        if ($data != NULL) {
            $i = 0;
            foreach ($data as $o) {
                $data['member'][$i] = array(
                    'idKonsumen' => $o->idKonsumen,
                    'username' => $o->username,
                    'password' => $o->password,
                    'namaKonsumen' => $o->namaKonsumen,
                    'alamat' => $o->alamat,
                    'namaKota' => $this->Mcrud->get_detail('tbl_kota', 'idKota', $o->idKota, 'namaKota'),
                    'email' => $o->email,
                    'tlpn' => $o->tlpn,
                    'statusAktif' => $o->statusAktif
                );
                $data['member'][$i] = (object)$data['member'][$i];
                $i++;
            }
        } else {
            $data['member'] = array();
        }
        $data['userName'] = $this->session->userdata('userName');
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
        $this->template->load('layout_admin', 'admin/member/index', $data);
    }

    public function add()
    {
        $data['userName'] = $this->session->userdata('userName');
        $data['kota'] = $this->Mcrud->get_all_data('tbl_kota')->result();
        $this->template->load('layout_admin', 'admin/member/form_add', $data);
    }

    public function getid($id)
    {
        $data['userName'] = $this->session->userdata('userName');
        $dataWhere = array('idKonsumen' => $id);
        $result = $this->Mcrud->get_by_id('tbl_member', $dataWhere)->row_object();
        $data['member'] = array(
            'idKonsumen' => $result->idKonsumen,
            'username' => $result->username,
            'password' => $result->password,
            'namaKonsumen' => $result->namaKonsumen,
            'alamat' => $result->alamat,
            'namaKota' => $this->Mcrud->get_detail('tbl_kota', 'idKota', $result->idKota, 'namaKota'),
            'email' => $result->email,
            'tlpn' => $result->tlpn,
            'statusAktif' => $result->statusAktif
        );
        $data['member'] = (object)$data['member'];
        $data['kota'] = $this->Mcrud->get_all_data('tbl_kota')->result();
        $this->template->load('layout_admin', 'admin/member/form_edit', $data);
    }

    public function save()
    {
        $data = $this->input->post();
        $dataInsert = array(
            'username' => $data['username'],
            'password' => $data['password'],
            'namaKonsumen' => $data['namaKonsumen'],
            'alamat' => $data['alamat'],
            'idKota' => $data['namaKota'],
            'email' => $data['email'],
            'tlpn' => $data['tlpn'],
            'statusAktif' => $data['statusAktif'],
        );
        $this->Mcrud->insert('tbl_member', $dataInsert);
        redirect('member');
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $namaKonsumen = $this->input->post('namaKonsumen');
        $alamat = $this->input->post('alamat');
        $idKota = $this->input->post('namaKota');
        $email = $this->input->post('email');
        $tlpn = $this->input->post('tlpn');
        $statusAktif = $this->input->post('statusAktif');

        $dataUpdate = array(
            'username' => $username,
            'password' => $password,
            'namaKonsumen' => $namaKonsumen,
            'alamat' => $alamat,
            'idKota' => $idKota,
            'email' => $email,
            'tlpn' => $tlpn,
            'statusAktif' => $statusAktif
        );

        $this->Mcrud->update('tbl_member', $dataUpdate, 'idKonsumen', $id);
        redirect('member');
    }
    public function del($id)
    {
        $where = array('idKonsumen' => $id);
        $this->Mcrud->hapus_data($where, 'tbl_member');
        redirect('member');
    }
}
