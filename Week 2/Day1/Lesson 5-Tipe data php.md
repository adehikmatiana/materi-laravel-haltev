# Tipe Data PHP

## Jenis-Jenis Tipe Data di dalam PHP

Di dalam PHP, terdapat 8 jenis tipe data yang bisa dikelompokkan menjadi 3 bagian:

### Tipe data dasar / tipe data primitive / tipe data scalar

>Tipe data dasar adalah tipe data yang umum tersedia di setiap bahasa pemrograman.

1. Integer (angka bulat)
2. Float (angka pecahan)
3. Boolean (logika true atau false)
4. String (teks)

> file name : dasar.php

### Tipe data composite / tipe data compound

1. Array = merupakan tipe data bentukan yang terdiri dari berbagai tipe data dasar. (file array.php)

2. Object = Tipe data object juga dibangun dari beberapa tipe data dasar, sekaligus memiliki fungsi (function) sendiri. Tipe data object akan dipelajari secara khusus dalam pemrograman berbasis object (object oriented programming – OOP)

### Tipe data khusus

1. Resource = digunakan untuk menyimpan link atau referensi untuk ke aplikasi lain di luar PHP, contohnya: hasil koneksi dari database.

    ```php
    <?php
    $koneksi = mysql_connect("localhost", "root", "");
    var_dump($koneksi);
    // resource(3) of type (mysql link)
    ?>
    ```

2. Null = Tipe data null adalah tipe data khusus yang hanya bisa diisi 1 nilai, yakni: ‘null’.

    **Dalam PHP, null berarti ‘tidak ada data’.**

    Di dalam pemrograman, NULL berarti ‘tidak ada data’, NULL berbeda dengan 0, atau string kosong. PHP menyediakan tipe data NULL yang hanya bisa diisi dengan nilai NULL.

    Sebuah variabel di dalam PHP akan bernilai NULL jika:

    - Diberikan nilai NULL.
    - Belum memiliki nilai awal.
    - Di hapus menggunakan fungsi unset().

    ```php
        <?php
        $var1 = 0;
        var_dump($var1); // int(0)

        $var2 = '';
        var_dump($var2); // string(0) ""

        $var3 = NULL;
        var_dump($var3); // NULL

        $var4;
        var_dump($var4); // NULL + Notice: Undefined variable: var4
        ?>
    ```
