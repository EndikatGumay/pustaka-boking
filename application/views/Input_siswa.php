<!DOCTYPE html>
<html>
<head>
    <title>Form Input Data Siswa</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <center>
    <h2>Form Input Data Siswa</h2>
    <form action="<?= base_url('index.php/siswa/submit') ?>" method="post">
        <table>
            <tr>
                <td><label for="nama">Nama Siswa:</label></td>
                <td><input type="text" id="nama" name="nama"></td>
            </tr>
            <tr>
                <td><label for="nis">NIS:</label></td>
                <td><input type="text" id="nis" name="nis"></td>
            </tr>
            <tr>
                <td><label for="kelas">Kelas:</label></td>
                <td><input type="text" id="kelas" name="kelas"></td>
            </tr>
            <tr>
                <td><label for="tanggal_lahir">Tanggal Lahir:</label></td>
                <td><input type="date" id="tanggal_lahir" name="tanggal_lahir"></td>
            </tr>
            <tr>
                <td><label for="tempat_lahir">Tempat Lahir:</label></td>
                <td><input type="text" id="tempat_lahir" name="tempat_lahir"></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat:</label></td>
                <td><textarea id="alamat" name="alamat" rows="4" cols="30"></textarea></td>
            </tr>
            <tr>
                <td><label for="jenis_kelamin">Jenis Kelamin:</label></td>
                <td>
                    <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-laki">
                    <label for="laki_laki">Laki-laki</label>
                    <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
                    <label for="perempuan">Perempuan</label>
                </td>
            </tr>
            <tr>
                <td><label for="agama">Agama:</label></td>
                <td>
                    <select id="agama" name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Khonghucu">Khonghucu</option>
                    </select>
                </td>
            </tr>
        </table>
        <br>
        <input type="submit" value="Submit">
    </form>
    </center>
</body>
</html>
