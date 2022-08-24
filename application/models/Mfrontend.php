<?php

class Mfrontend extends CI_Model
{
    public function get_all_kategori()
    {
        return $this->db->get('tbl_kategori');
    }

    public function get_all_kota()
    {
        return $this->db->get('tbl_kota');
    }

    public function get_all_produk_terbaru()
    {
        $this->db->order_by('idProduk', 'DESC');
        $this->db->limit(4);
        return $this->db->get('tbl_produk');
    }

    public function insertreg($tabel, $data_insert)
    {
        $this->db->insert($tabel, $data_insert);
    }

    public function get_all_produk()
    {
        $this->db->order_by('idProduk');

        return $this->db->get('tbl_produk');
    }
}
