<?php
class OngkosKirim extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');
    }
    public function index()
    {
        $data = $this->Mcrud->get_all_data('tbl_biaya_kirim')->result();
        if ($data != NULL) {
            $i = 0;
            foreach ($data as $o) {
                $data['ongkosKirim'][$i] = array(
                    'idBiayaKirim' => $o->idBiayaKirim,
                    'namaKurir' => $this->Mcrud->get_detail('tbl_kurir', 'idKurir', $o->idKurir, 'namaKurir'),
                    'namaKotaAsal' => $this->Mcrud->get_detail('tbl_kota', 'idKota', $o->idKotaAsal, 'namaKota'),
                    'namaKotaTujuan' => $this->Mcrud->get_detail('tbl_kota', 'idKota', $o->idKotaTujuan, 'namaKota'),
                    'biaya' => $o->biaya
                );
                $data['ongkosKirim'][$i] = (object)$data['ongkosKirim'][$i];
                $i++;
            }
        } else {
            $data['ongkosKirim'] = array();
        }

        $data['userName'] = $this->session->userdata('userName');
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
        $this->template->load('layout_admin', 'admin/ongkosKirim/index', $data);
    }
    public function add()
    {
        $data['userName'] = $this->session->userdata('userName');
        $data['kurir'] = $this->Mcrud->get_all_data('tbl_kurir')->result();
        $data['kota'] = $this->Mcrud->get_all_data('tbl_kota')->result();
        $this->template->load('layout_admin', 'admin/ongkosKirim/form_add', $data);
    }
    public function getid($id)
    {
        $dataWhere = array('idBiayaKirim' => $id);
        $data['userName'] = $this->session->userdata('userName');
        $result = $this->Mcrud->get_by_id('tbl_biaya_kirim', $dataWhere)->row_object();
        $data['ongkosKirim'] = array(
            'idBiayaKirim' => $result->idBiayaKirim,
            'namaKurir' => $this->Mcrud->get_detail('tbl_kurir', 'idKurir', $result->idKurir, 'namaKurir'),
            'namaKotaAsal' => $this->Mcrud->get_detail('tbl_kota', 'idKota', $result->idKotaAsal, 'namaKota'),
            'namaKotaTujuan' => $this->Mcrud->get_detail('tbl_kota', 'idKota', $result->idKotaTujuan, 'namaKota'),
            'biaya' => $result->biaya
        );
        $data['ongkosKirim'] = (object)$data['ongkosKirim'];
        $data['kurir'] = $this->Mcrud->get_all_data('tbl_kurir')->result();
        $data['kota'] = $this->Mcrud->get_all_data('tbl_kota')->result();
        // var_dump($data['ongkir']);
        $this->template->load('layout_admin', 'admin/ongkosKirim/form_edit', $data);
    }

    public function save()
    {
        $data = $this->input->post();
        $dataInsert = array(
            'idKurir' => $data['idKurir'],
            'idKotaAsal' => $data['idKotaAsal'],
            'idKotaTujuan' => $data['idKotaTujuan'],
            'biaya' => $data['biaya']
        );
        $this->Mcrud->insert('tbl_biaya_kirim', $dataInsert);
        redirect('ongkosKirim');
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $idKurir = $this->input->post('idKurir');
        $idKotaAsal = $this->input->post('idKotaAsal');
        $idKotaTujuan = $this->input->post('idKotaTujuan');
        $biaya = $this->input->post('biaya');
        $dataUpdate = array(
            'idKurir' => $idKurir,
            'idKotaAsal' => $idKotaAsal,
            'idKotaTujuan' => $idKotaTujuan,
            'biaya' => $biaya
        );
        $this->Mcrud->update('tbl_biaya_kirim', $dataUpdate, 'idBiayakirim', $id);
        redirect('ongkosKirim');
    }
    public function delong($id)
    {
        $where = array('idBiayaKirim' => $id);
        $this->Mcrud->hapus_data($where, 'tbl_biaya_kirim');
        redirect('ongkosKirim');
    }
}
