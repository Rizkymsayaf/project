<!DOCTYPE html>
<html>
    <head><title>document</title></head>
    <body>
       <?php
include '../database.php';
$anggota = new anggota();
foreach ($anggota->show($_GET['id_anggota']) as $data) {
    $id_anggota = $data['id_anggota'];
    $nm_anggota = $data['nm_anggota'];
    $alamat = $data['alamat'];
    $ttl_anggota = $data['ttl_anggota'];

}
?>
       <fieldset>
           <legend>show data angggota</legend>
           <table>
               <tr>
                   <th>id anggota</th>
                   <td><input type="number" name="id_anggota" value="<?php echo $id_anggota; ?>" readonly></td>
               </tr>
                <tr>
                   <th>Nama angggota</th>
                   <td><input type="text" name="nm_anggota" value="<?php echo $nm_anggota; ?>" readonly></td>
               </tr>
               <tr>
                   <th> Alamat</th>
                   <td><input type="text" name="alamat" value="<?php echo $alamat; ?>" readonly></td>
               </tr>
               <tr>
                   <th>Tempat tanggal lahir</th>
                   <td><input type="text" name="ttl_anggota" value="<?php echo $ttl_anggota; ?>" readonly></td>
               </tr>
           </table>
       </fieldset>
    </body>
</html>