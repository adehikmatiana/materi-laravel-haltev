<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Date() > Harus punya parameter 
    date("L, d-M-Y");

    echo date("l, d-M-Y");

    echo "<br>";

    // Time() > Tidak harus punya parameter
    time();
    echo time();

    echo "<br>";

    echo date("l, d-M-Y", time() - 60 * 60 * 24 * 100);



    // MKTIME() 
    // Parameternya ada 6
    // mktime( jam, menit, detik, bulan, tanggal, tahun)

    echo "<br>";
    // membuat detik saya lahr
    echo mktime(0, 0, 0, 9, 9, 1998);


    // // cari tahu hari saya lahir
    echo "<br>";
    echo date("l", mktime(0, 0, 0, 9, 9, 1998));
    echo "<br>";
    // Strtotime
    echo date("l", strtotime("17 aug 1945"));

    ?>




</body>

</html>