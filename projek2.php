<?php
    $file = mysqli_connect("localhost","root","","pendaftaran");
    $data = mysqli_query($file, "SELECT * FROM pendaftaran");
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
            <th>no</th>
            <th>nama</th>
            <th>tempat lahir</th>
            <th>tanggal lahir</th>
            <th>alamat</th>
            <th>no. hp</th>
            <th>jurusan</th>
            <th>jalur pendaftaran</th>
            <th>nama sekolah asal</th>
            <th>alamat sekolah asal</th>
            <th>mendapat info</th>
        </tr>
        <?php $i = 1;?>
        <?php while ($calon = mysqli_fetch_assoc($data)):?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $calon["nama"]; ?></td>
            <td><?= $calon["tempat_lahir"]; ?></td>
            <td><?= $calon["tanggal_lahir"]; ?></td>
            <td><?= $calon["alamat"]; ?></td>
            <td><?= $calon["no_hp"]; ?></td>
            <td><?= $calon["pilihan_jurusan"]; ?></td>
            <td><?= $calon["jalur_pendaftaran"]; ?></td>
            <td><?= $calon["sekolah_asal"]; ?></td>
            <td><?= $calon["alamat_sekolah"]; ?></td>
            <td><?= $calon["info"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile ; ?>
    </table>
</body>
</html>
