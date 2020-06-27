<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>str_pad</title>
</head>

<body>
    <!-- contoh yang biasa dengan 2 argumen  -->
    <?php
    $a = "a";
    echo str_pad($a, 8);

    $b = "qwerty";
    echo str_pad($b, 6);

    $c = "abcdefghijk2";
    echo str_pad($c, 5);

    //  contoh dengan 3 argumen dan 4 argumen 

    // STR_PAD_LEFT
    // STR_PAD_RIGHT
    // STR_PAD_BOTH
    ?>
</body>

</html>