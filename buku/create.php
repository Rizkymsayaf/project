<html>
    <head>
        <title>document</title>
    </head>
    <body>
        <fieldset>
            <legend>Input data dosen</legend>
            <form action="proses.php" method="post">
        <input type="hidden" name="aksi" value="create">
        <table>
            <tr>
                <th>kode buku</th>
                <td><input type="name" name="kd_buku" required></td>
            </tr>
             <tr>
                <th>Judul Buka</th>
                <td><input type="text" name="judul_buku" required></td>
            </tr>
            <tr>
                <th>Pengarang</th>
                <td><input type="text" name="pengarang" required></td>
            </tr>
            <tr>
                <th>Jenis Buku</th>
                <td><select name="jenis_buku" >
                    <option value="novel">novel</option>
                    <option value="komik">komik</option>
                    <option value="dongeng">dongeng</option>
                    <option value="biografi">biografi</option>
                </select></td>
            </tr>
            <tr>
                <th>penerbit</th>
                <td><select name="penerbit" >
                    <option value="buku kampungku">buku kampungku</option>
                      <option value="pastel books">pastel books</option>
                        <option value="republika">republika</option>
                </select></td>
            </tr>
             <tr>
                <th><input type="submit" name="save" ></th>

            </tr>
        </table>
    </form>
        </fieldset>
    </body>
</html>
