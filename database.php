<?php
class Database
{
    public $host = "localhost", $user = "root", $pass = "", $db = "perpustakaan";
    public $koneksi;

    public function __construct()
    {
        $this->koneksi = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );
        if ($this->koneksi) {
            echo "berhasil";
        } else {
            echo "Koneksi database gagal";
        }
    }
}
// data tabel dosen & mahasiswa
include 'anggota.php';
include 'buku.php';

//koneksi db
$db = new Database();
