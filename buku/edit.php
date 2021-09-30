<html>
    <head>
        <title>d</title>
    </head>
    <body>
        <?php
include '../database.php';
$buku = new buku();
foreach ($buku->edit($_GET['kd_buku']) as $data) {
    $kd_buku = $data['kd_buku'];
    $judul_buku = $data['judul_buku'];
    $pengarang = $data['pengarang'];
    $jenis_buku = $data['jenis_buku'];
    $penerbit = $data['penerbit'];

}
?>
        <fieldset>
            <legend>Edit data buku</legend>
            <form action="proses.php" method="Post">
                <input type="hidden" name="aksi" value="update">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <table>
                    <tr>
                        <th>kode buku</th>
                        <td><input type="number" name="kd_buku" value="<?php echo $kd_buku; ?>" required> </td>
                    </tr>
                    <tr>
                        <th>judul buku</th>
                        <td><input type="text" name="judul_buku" value="<?php echo $judul_buku; ?>" required> </td>
                    </tr>
                     <tr>
                        <th>pengarang</th>
                        <td><input type="text" name="pengarang" value="<?php echo $pengarang; ?>" required> </td>
                    </tr>
                     <tr>
                        <th>penerbit</th>
                        <td><input type="text" name="penerbit" value="<?php echo $penerbit; ?>" required> </td>
                    </tr>
                    <tr>
                        <th><input type="submit" name="save" value="simpan"> </th>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>