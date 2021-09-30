<!DOCTYPE html>
<html>
    <head><title>document</title></head>
<body>
    <center>Data buku</center>
    <fieldset>
        <legend>Data buku</legend>
        <a href="create.php">Tambah data buku</a>
        <table border="1">
            <tr>
                <th>NO</th>
                <th>Kode Buku</th>
                <th>Judul Buku</th>
                <th>pengarang</th>
                <th>Jenis Buku</th>
                <th>penerbit</th>
                <th colspan="3">Aksi</th>
            </tr>
            <?php
include '../database.php';
$buku = new buku();
$no = 1;
foreach ($buku->index() as $data) {
    ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['kd_buku']; ?></td>
                    <td><?php echo $data['judul_buku']; ?></td>
                    <td><?php echo $data['pengarang']; ?></td>
                    <td><?php echo $data['jenis_buku']; ?></td>
                    <td><?php echo $data['penerbit']; ?></td>
                    <td>
                        <a href="show.php?id=<?php echo $data['kd_buku']; ?>">show</a>
                    </td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['kd_buku']; ?>">edit</a>
                    </td>
                    <td>
                        <form action="proses.php" method="post">
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