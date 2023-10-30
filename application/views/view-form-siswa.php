<html>
<head>
    <title>Form Input Matakuliah</title>
</head>

<body>
    <center>
        <form action="<?= base_url('datasiswa/cetak');?>"method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Siswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <th>:</th>
                    <td>
                        <input type="text" value="<?= set_value('nama') ?>" name="kode" id="kode">
                        <?=form_error('nama')?>
                    </td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <td>:</td>
                    <td>
                        <input type="text" value="<?= set_value('nis')?>" name="nama" id="nama">
                       <?=form_error('nis')?> 
                    </td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <th>:</th>
                    <td>
                        <input type="text" value="<?= set_value('kelas') ?>" name="kode" id="kode">
                        <?=form_error('kelas')?>
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <th>:</th>
                    <td>
                        <input type="text" value="<?= set_value('ttl') ?>" name="kode" id="kode">
                        <?=form_error('ttl')?>
                    </td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <th>:</th>
                    <td>
                        <input type="text" value="<?= set_value('tempat') ?>" name="kode" id="kode">
                        <?=form_error('tempat')?>
                    </td>
                </tr>
                <tr>
                <tr>
                    <th>Alamat</th>
                    <th>:</th>
                    <td>
                        <input type="text" value="<?= set_value('alamat') ?>" name="kode" id="kode">
                        <?=form_error('alamat')?>
                    </td>
                </tr>
                <tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <th>:</th>
                    <td>
                        <input type="radio" name="jenis_kelamin" id="Laki-laki" value="Laki-laki" required>Laki-laki
                        <input type="radio" name="jenis_kelamin" id="Perempuan" value="Perempuan" required>Perempuan
                    </td>
                </tr>
                <tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Pilih Agama</option>
                            <option value="islam">Islam</option>
                            <option value="kriste">Kristen</option>
                            <option value="katolik">Katolik</option>
                            <option value="budha">Budha</option>
                            <option value="hindu">Hindu</option>
                            <option value="prostetan">Prostetan</option>
                            <option value="konghucu">Konghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>