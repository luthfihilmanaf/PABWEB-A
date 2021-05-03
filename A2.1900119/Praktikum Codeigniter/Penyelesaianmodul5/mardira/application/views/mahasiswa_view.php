<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <?php echo anchor('mahasiswa/tambah_data', 'Tambah Data') ?>
    <table border="4">
        <thread>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama Siswa</th>
                <th>Program Studi</th>
            </tr>
        </thread>
        <tbody>
            <?php
            $no = 1;
            foreach ($mahasiswa as $row) { ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row->nim ?></td>
                    <td><?php echo $row->nama_mhs ?></td>
                    <td><?php echo $row->nama_prodi ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>