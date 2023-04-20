<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata</title>
</head>
<body>
    <h2>Silahkan Mengisi Data Anda!</h2>
    <form method="POST" action="output.php">
        <table rules="rows" >
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" placeholder="Masukan Nama..." style="width:95%;"></td>
            </tr>
            <tr>
                <td>NPM</td>
                <td><input type="text" name="npm" placeholder="Masukan NPM..." style="width:95%;"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tglLahir" style="width:95%;"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="jk" value="Laki-Laki">Laki-Laki
                <input type="radio" name="jk" value="Perempuan">Perempuan</td>
            </tr>
            <tr>
                <td>Foto Profil</td>
                <td><input type="file" name="foto" accept="image/"></td>
            </tr>
            <tr>
                <td>Angkatan Mahasiswa</td>
                <td><select name="angkatan_mahasiswa" id="" style="width:95%;">
                    <option value="">--Pilih--</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                </select></td>
            </tr>
            <tr>
                <td>Hobby</td>
                <td><input type=”text” name=”hobby” size=”20″ style="width:95%;"></td>
            </tr>
            <br>
        </table>
        <br>
        <button type="submit" name="submit" value="submit">Kirim</button>
    </form>
</body>
</html>