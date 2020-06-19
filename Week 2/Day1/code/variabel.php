<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar variabel</title>
    <?php
    $nama = "Tiana";
    $umur = 21;
    $pesan = "Saya sedang belajar PHP";
    ?>
</head>

<body>
    <h1>Halo, nama saya <?= $nama; ?>,
        kemudian usia saya saat ini adalah <?= $umur ?> </h1>
    <h2>ini adalah pesan wasiat saya $pesan </h2>
    <? 
    $tempat_lahir = array("bekasi", "jayapura");
    $siswa = array("tiana", "hikma",  "ade", "raden", "sangunda");

    echo "nama sayaa  $siswa[0]  dan saya lahir di  $tempat_lahir[1]";
    ?>
</body>

</html>