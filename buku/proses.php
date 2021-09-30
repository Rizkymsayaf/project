<?php
include '../database.php';
$buku = new buku();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $kd_buku = @$_POST['kd_buku'];
    $judul_buku = $_POST['judul_buku'];
    $pengarang = $_POST['pengarang'];
    $jenis_buku = $_POST['jenis_buku'];
    $penerbit = $_POST['penerbit'];

    if ($aksi == "create") {
        $buku->create($kd_buku, $judul_buku, $pengarang, $jenis_buku, $penerbit);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $buku->update($kd_buku, $judul_buku, $pengarang, $jenis_buku, $penerbit);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $buku->delete($kd_buku);
        header("location:index.php");
    }

}
