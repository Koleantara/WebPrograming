<?php
include 'config.php';
$query = "SELECT * FROM tbl_calon_ketua";
$no = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Id Calon</th>
            <th>Nama Calon</th>
            <th>Visi</th>
            <th>Misi</th>
            <th>Foto</th>
        </tr>
           <?php
            $Data = mysqli_query($connection, $query);
            foreach ($Data as $d):
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $d['Nama']; ?></td>
                <td><?= $d['Visi']; ?></td>
                <td><?= $d['Misi']; ?></td>
                <td><?= $d['Foto']; ?></td>
            </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>