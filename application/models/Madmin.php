<?php
class Madmin extends CI_Model
{
    public function get_ongkir()
    {
        $ongkir = $this->db->query(
            "SELECT b.idBiayaKirim, k.namaKota AS asal, j.namakota AS tujuan, b.biaya, r.namaKurir FROM tbl_biaya_kirim b JOIN tbl_kota k ON b.idKotaAsal=k.idKota JOIN tbl_kota ON b.idKotaTujuan=j.idKota JOIN tbl_kurir r ON b.idKurir=r.idKurir"
        );
        return $ongkir;
    }
}
