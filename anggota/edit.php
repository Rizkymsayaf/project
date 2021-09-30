<html>
    <head>
        <title>d</title>
    </head>
    <body>
        <?php
include '../database.php';
$anggota = new anggota();
foreach ($anggota->edit($_GET['id_anggota']) as $data) {
    $id_anggota = $data['id_anggota'];
    $nm_anggota = $data['nm_anggota'];
    $alamat = $data['alamat'];
    $ttl_anggota = $data['ttl_anggota'];
    

}
?>
        <fieldset>
            <legend>Edit data anngota</legend>
            <form action="proses.php" method="Post">
                <input type="hidden" name="aksi" value="update">
                <input type="hidden" name="id_anggota" value="<?php echo $id_anggota; ?>">
                <table>
                    <tr>
                        <th>Nama anggota</th>
                        <td><input type="text" name="nm_anggota" value="<?php echo $nm_anggota; ?>" required> </td>
                    </tr>
                    <tr>
                        <th>alamat</th>
                        <td><input type="text" name="alamat" value="<?php echo $alamat; ?>" required> </td>
                    </tr>
                    <tr>
                    <th>tempat tanggal lahir</th>
                        <td><input type="text" name="ttl_anggota" value="<?php echo $ttl_anggota; ?>" required> </td>

                    </tr>
                    <tr>
                        <th><input type="submit" name="save" value="simpan"> </th>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>