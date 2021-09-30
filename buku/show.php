<!DOCTYPE html>
<html>
    <head><title>document</title></head>
    <body>
       <?php
include '../database.php';
$buku = new buku();
foreach ($buku->show($_GET['kd_buku']) as $data) {
    $kd_buku = $data['kd_buku'];
    $judul_buku = $data['judul_buku'];
    $pengarang = $data['pengarang'];
    $jenis_buku = $data['jenis_buku'];
    $penerbit = $data['penerbit'];

}
?>
       <fieldset>
           <legend>show data buku</legend>
           <table>
               <tr>
                   <th>kode buku</th>
                   <td><input type="text" name="kd_buku" value="<?php echo $kd_buku; ?>" readonly></td>
               </tr>
                <tr>
                   <th>judul buku</th>
                   <td><input type="text" name="judul_buku" value="<?php echo $judul_buku; ?>" readonly></td>
               </tr>
                 <tr>
                   <th>pengarang</th>
                   <td><input type="text" name="pengarang" value="<?php echo $pengarang; ?>" readonly></td>
               </tr>
                <tr>
                   <th>jenis buku
                   </th>
                   <td><input type="text" name="jenis_buku" value="<?php echo $jenis_buku; ?>" readonly></td>
               </tr>
                <tr>
                   <th>penerbit</th>
                   <td><input type="text" name="penerbit" value="<?php echo $penerbit; ?>" readonly></td>
               </tr>
           </table>
       </fieldset>
    </body>
</html>