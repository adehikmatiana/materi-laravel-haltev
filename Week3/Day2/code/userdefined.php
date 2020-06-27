<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user defined function</title>
</head>

<body>
    <!-- <?php
            function kalimat($nama = null, $alamat = "dunia")
            {
                echo "nama saya $nama, saya berasal dari $alamat ...";
            }
            kalimat("tiana", "bekasi");
            ?> -->

    <?php
    function cetakpesan($nama = null)
    {
        if (empty($nama))
            echo "selamat";
        else echo "selamat datang $nama";
    }
    function kumpulan()
    {
        echo cetakpesan();
    }
    kumpulan()


    ?>
</body>

</html>