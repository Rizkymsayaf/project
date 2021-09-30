<!DOCTYPE html>
<html>
    <head><title>document</title></head>
<body>
    <center>Data anggota</center>
    <fieldset>
        <legend>Data anggota</legend>
        <a href="create.php">Tambah data anggota</a>
        <table border="1">
            <tr>
                <th>no</th>
                <th>Nama Anggota</th>
                <th>Alamat</th>
                <th>Tempat tanggal lahir</th>
                <th>Jenis Kelamin</th>
                <th colspan="3">Aksi</th>
            </tr>
            <?php
include '../database.php';
$anggota = new anggota();
$no = 1;
foreach ($anggota->index() as $data) {
    ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['id_anggota']; ?></td>
                    <td><?php echo $data['nm_anggota']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['ttl_anggota']; ?></td>

                    <td>
                        <a href="show.php?id=<?php echo $data['id_anggota']; ?>">show</a>
                    </td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['id_anggota']; ?>">edit</a>
                    </td>
                    <td>
                        <form action="proses.php" method="post">
                    <input type="hidden" name="id_anggota" value="<?php echo $data['id_anggota']; ?>">
                <input type="hidden" name="aksi" value="delete">
            <button type="submit" name="save" onclick="return confirm('Apakah anda yakin mau menghapus data ini ?')">Delete
            </button>
              </form>
                    </td>
                </tr>
                <?php
}?>
        </table>
    </fieldset>
</body>
    </html>