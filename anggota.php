<?php
class anggota extends Database
{
    // menampilkan semua data
    public function index()
    {
        $dataanggota = mysqli_query($this->koneksi, "select * from anggota");
        //var_dump($database);
        return $dataanggota;
    }

    //menambah data
    public function create( $nm_anggota,$alamat,$ttl_anggota)
    {
        mysqli_query(
            $this->koneksi,
            "insert into anggota values(null,'$nm_anggota','$alamat','$ttl_anggota')"
        );
    }
    //menampilkan data berdasarkan id
    public function show($id_anggota)
    {
        $dataanggota = mysqli_query(
            $this->koneksi,
            "select * from anggota where id_anggota='$id_anggota'"
        );
        return $dataanggota;
    }
    //menampilkan data berdasarkan id
    public function edit($id_anggota)
    {
        $dataanggota = mysqli_query(
            $this->koneksi,
            "select * from anggota where id_anggota='$id_anggota'"
        );
        return $dataanggota;
    }
    //mengupdate data berdasarkan id
    public function update($id_anggota,$nm_anggota,$alamat,$ttl_anggota)
    {
        mysqli_query(
            $this->koneksi,
            "update anggota set nm_anggota='$nm_anggota', alamat='$alamat', ttl_anggota='$ttl_anggota'
             where id_anggota='$id_anggota'"
        );
    }
    //menghapus data berdasarkan id
    public function delete($id_anggota)
    {
        mysqli_query($this->koneksi, "delete from dosen where id_anggota='$id_anggota'");
    }

}
