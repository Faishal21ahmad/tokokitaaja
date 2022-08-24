<?php
class Mmember extends CI_Model
{
    public function cek_login($u, $p)
    {
        $q = $this->db->get_where('tbl_member', array('username' => $u, 'password' => $p));
        return $q;
    }

    public function get_toko_by_member()
    {
        $id = $this->session->userdata('id');
        $q = $this->db->get_where('tbl_toko', array('idKonsumen' => $id));
        return $q;
    }
    public function insert_toko($data)
    {
        $this->db->insert('tbl_toko', $data);
    }
    public function get_produk_by_id($idproduk)
    {
        return $this->db->get_where('tbl_produk', array('idProduk' => $idproduk));
    }
    public function insert_order($data)
    {
        $this->db->insert('tbl_order', $data);
        $idTerakhir = $this->db->insert_id();
        return (isset($idTerakhir)) ? $idTerakhir : FALSE;
    }
    public function insert_detail_order($data)
    {
        $this->db->insert('tbl_detail_order', $data);
    }
    public function jml_transaksi_belum_bayar()
    {
        $id = $this->session->userdata('id');
        return $this->db->query("SELECT * FROM tbl_order WHERE idKonsumen=$id AND statusOrder='Belum Bayar'"); //belum selesai
    }
    public function get_trans_by_konsumen()
    {
        $id = $this->session->userdata('id');
        return $this->db->query("SELECT * FROM tbl_order o, tbl_member m WHERE o.idKonsumen=m.idKonsumen"); //belum selesai
    }
}
