<?php
class Mcrud extends CI_Model
{
    public function get_all_data($tabel)
    {
        $q = $this->db->get($tabel);
        return $q;
    }
    public function get_detail($tabel, $id_column, $id, $column)
    {
        $dataWhere = array($id_column => $id);
        $data = $this->db->get_where($tabel, $dataWhere)->row_object();
        return ($data->$column);
    }
    public function insert($tabel, $data)
    {
        $this->db->insert($tabel, $data);
    }
    public function get_by_id($tabel, $id)
    {
        return $this->db->get_where($tabel, $id);
    }
    public function update($tabel, $data, $pk, $id)
    {
        $this->db->where($pk, $id);
        $this->db->update($tabel, $data);
    }

    public function hapus_data($where, $tabel)
    {
        $this->db->where($where);
        $this->db->delete($tabel);
    }
    // public function ongkir()
    // {
    //     $this->db->select('*');
    //     $this->db->from('tbl_biaya_kirim');
    //     $this->db->join('tbl_kurir', 'tbl_biaya_kirim.idKurir=tbl_kurir.idKurir');
    //     $this->db->join('tbl_kota', 'tbl_biaya_kirim.idKotaAsal=tbl_kota.idKota');
    //     // $this->db->join('tbl_kota', 'tbl_biaya_kirim.idKotaTujuan=tbl_kota.idKota');
    //     $q = $this->db->get();
    //     return $q;
    // }
    // public function get_ongkir()
    // {
    //     $q = $this->db->query("SELECT b.idBiayaKirim, k.namaKota AS asal, j.namakota AS tujuan, b.biaya, r.namaKurir FROM tbl_biaya_kirim b JOIN tbl_kota k ON b.idKotaAsal=k.idKota JOIN tbl_kota j ON b.idKotaTujuan=j.idKota JOIN tbl_kurir r ON b.idKurir=r.idKurir");
    //     return $q;
    // }
}
