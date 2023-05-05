<?php
class pesanan {
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }
    public function pesanan(){
        $sql = "SELECT a.tanggal, a.total, b.nama_pelanggan FROM pesanan a
        LEFT JOIN pelanggan b ON b.id = a.pelanggan_id";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}


?>