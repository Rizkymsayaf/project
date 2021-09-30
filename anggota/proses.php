<?php
include '../database.php';
$anggota = new anggota();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id_anggota = @$_POST['id_anggota'];
    $nm_anggota = $_POST['nm_anggota'];
    $alamat = $_POST['alamat'];
    $ttl_anggota = $_POST['ttl_anggota'];

    if ($aksi == "create") {
        $anggota->create($nm_anggota,$alamat,$ttl_anggota);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $anggota->update($id_anggota,$nm_anggota,$alamat,$ttl_anggota);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $anggota->delete($id_anggota);
        header("location:index.php");
    }

}
