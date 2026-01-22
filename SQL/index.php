
<?php
include 'config.php';
$query = "SELECT * FROM tbl_siswa";
$no = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    <button type="button" class="btn btn-primary" onclick="window.location.href='Tambah_Siswa.php'">Tambah Siswa</button>
    <h2>Data Siswa</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <?php
            $Data = mysqli_query($connection, $query);
            foreach ($Data as $d):
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $d['Nama']; ?></td>
                <td><?= $d['Kelas']; ?></td>
                <td><?= $d['Jurusan']; ?></td>
                <td><?= $d['Alamat']; ?></td>
            </tr>
            <?php endforeach; ?>

        </tr>
    </table>
</body>
</html>