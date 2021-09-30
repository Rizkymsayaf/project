<?php
class buku extends Database
{
    // menampilkan semua data
    public function index()
    {
        $databuku = mysqli_query($this->koneksi, "select * from buku");
        //var_dump($database);
        return $databuku;
    }

    //menambah data
    public function create($kd_buku, $judul_buku, $pengarang, $jenis_buku, $penerbit)
    {
        mysqli_query(
            $this->koneksi,
            "insert into buku values('$kd_buku','$judul_buku','$pengarang','$jenis_buku','$penerbit')"
        );
    }
    //menampilkan data berdasarkan id
    public function show($kd_buku)
    {
        $databuku = mysqli_query(
            $this->koneksi,
            "select * from buku where kd_buku='$kd_buku'"
        );
        return $databuku;
    }
    //menampilkan data berdasarkan id
    public function edit($kd_buku)
    {
        $databuku = mysqli_query(
            $this->koneksi,
            "select * from buku where kd_buku='$kd_buku'"
        );
        return $databuku;
    }
    //mengupdate data berdasarkan id
    public function update($kd_buku, $judul_buku, $pengarang, $jenis_buku, $penerbit)
    {
        mysqli_query(
            $this->koneksi,
            "update buku set nama='$nama', kd_buku='$kd_buku', judul_buku='$judul_buku',
            pengarang='$pengarang',jenis_buku='$jenis_buku',penerbit='$penerbit' where kd_buku='$kd_buku'"
        );
    }
    //menghapus data berdasarkan id
    public function delete($kd_buku)
    {
        mysqli_query($this->koneksi, "delete from buku where kd_buku='$kd_buku'");
    }

}
