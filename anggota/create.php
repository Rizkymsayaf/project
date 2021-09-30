<html>
    <head>
        <title>document</title>
    </head>
    <body>
        <fieldset>
            <legend>Input data anggota</legend>
            <form action="proses.php" method="post">
        <input type="hidden" name="aksi" value="create">
        <table>
             <tr>
                <th>Nama angggota</th>
                <td><input type="text" name="nm_anggota" required></td>
            </tr>
            <tr>
                <th>alamat</th>
                <td><input type="text" name="alamat" required></td>
            </tr>
            <tr>
                <th>tempat tanggal lahir anggota</th>
                <td><input type="text" name="ttl_anggota" required></td>
            </tr>
             <tr>
                <th><input type="submit" name="save" ></th>

            </tr>
        </table>
    </form>
        </fieldset>
    </body>
</html>
