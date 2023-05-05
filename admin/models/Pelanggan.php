<?php
class Pelanggan {
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }
    public function pelanggan(){
        $sql = "SELECT a.kode, a.nama_pelanggan, a.jk, a.tmp_lahir, a.email, a.alamat, b.nama, b.diskon, b.iuran FROM pelanggan  a
        LEFT JOIN kartu b ON b.id = a.kartu_id;";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}


?>