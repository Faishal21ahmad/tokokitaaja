<?php
class Mfavorit extends CI_Model
{
    public function delete_favorit($where, $tabel)
    {
        $this->db->where($where);
        $this->db->delete($tabel);
    }
    public function insert_favorit($data)
    {
        $this->db->insert('tbl_favorit', $data);
    }

    //  Memanggil data favorit berdasarkan idKonsumen 
    //  Data untuk list favorit setiap member konsumen 
    public function get_favorit_by_idKonsumen()
    {
        $id = $this->session->userdata('id');
        return $this->db->query("SELECT tbl_favorit.idFavorit, tbl_favorit.idKonsumen, tbl_favorit.idProduk, tbl_produk.namaProduk, tbl_produk.idToko, tbl_produk.namaProduk, tbl_produk.foto, tbl_produk.harga, tbl_produk.deskripsiProduk FROM tbl_produk JOIN tbl_favorit ON tbl_produk.idProduk = tbl_favorit.idProduk WHERE tbl_favorit.idKonsumen = $id");
    }
    // Memanggil Top 4 data terfavorit 
    // data untuk memilih 4 produk terfavorit 
    public function get_all_produk_terfavorit_4()
    {
        return $this->db->query("SELECT tbl_favorit.idFavorit, tbl_favorit.idKonsumen, tbl_favorit.idProduk, tbl_produk.namaProduk, tbl_produk.idToko, tbl_produk.namaProduk, tbl_produk.foto, tbl_produk.harga, tbl_produk.deskripsiProduk, COUNT(tbl_favorit.idProduk) AS JumlahFavorit FROM tbl_produk JOIN tbl_favorit ON tbl_produk.idProduk = tbl_favorit.idProduk GROUP BY tbl_favorit.idProduk ORDER BY JumlahFavorit DESC LIMIT 4");
    }
    // memanggil data lebih spesifik berdasaarkan id konsumen dan id barang 
    // di peruntukan untuk cek data 
    public function get_favorit_by_idKonsumen_idBarang($id)
    {
        $produk = $id;
        $id = $this->session->userdata('id');
        return $this->db->query("SELECT * FROM  tbl_favorit  WHERE idKonsumen = $id  AND idProduk = $produk");
    }
}
