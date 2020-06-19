# Aturan Dasar Penulisan PHP

Selanjutnya kita akan membahas tentang Aturan Penulisan PHP

## Extension File PHP

Setiap halaman yang memiliki kode PHP, HARUS di simpan dalam akhiran .php. Walaupun di dalam file tersebut terdiri dari 1000 baris kode HTML dan 1 baris kode PHP, tetap harus memiliki akhiran `file.php`, seperti `index.php`, `homepage.php`, atau `register.php`.

## Mengenal PHP Tag

PHP tag adalah sebutan untuk tag yang berfungsi sebagai **penanda kode PHP**. Seperti yang telah kita pelajari sebelumnya, sebuah file PHP dapat terdiri dari kode PHP itu sendiri serta kode HTML, CSS, dan JavaScript. Oleh karena itu, web server membutuhkan suatu cara untuk menandai bagian mana yang merupakan kode PHP, dan mana HTML.

## Standar PHP tag

PHP tag yang paling umum dan paling disarankan adalah dengan karakter `<?php` **sebagai tag pembuka** dan karakter `?>` **sebagai tag penutup**. Karakter `<?php` dan `?>` secara formal disebut juga sebagai **Standar PHP tag atau XML style tag.**

Diantara kedua tag inilah kita menulis kode PHP. Jika perintah PHP berada di luar tag ini, kode tersebut tidak akan berjalan dan dianggap sebagai kode HTML biasa. Berikut contoh penulisannya:

```php
    <?php
        echo "<p>Kalimat ini berasal dari Standard PHP tag </p>";
    ?>
```

## Short PHP tag

Short PHP tag atau disebut juga dengan SMGL style tag, menggunakan tag `<?` **sebagai pembuka**, dan tag `?>` sebagai penutup. Perhatikan bahwa di dalam tag pembuka, tidak menggunakan kata “php”. Berikut contohnya:

```php
    <?
        echo "<p>Kalimat ini berasal dari short PHP tag </p>";
    ?>
```

## Perintah echo, print, print_r(), dan Var_Dump

### Fungsi Echo Pada PHP

`echo` digunakan **HANYA sekedar untuk mencetak output ke browser, tidak ada tujuan lain**, sehingga statement inilah yang paling sering digunakan untuk mencetak output ke browser.

`echo` bukanlah sebuah fungsi melainkan hanya **“language costruct“**.

Kita dapat menambahkan argumen pada echo dengan pemisah tanda koma, misal: `echo 'Nama ', $nama;`

### Fungsi Print Pada PHP

Seperti pada echo, print juga digunakan untuk mencetak output ke browse, namun bedanya:

**print ini akan selalu menghasilkan nilai 1.**

`print` hanya dapat menerima satu argumen, sehingga kita tidak bisa menulis: **print: 'Nama ' , $nama**

print ini juga bukan merupakan fungsi melainkan hanya “language construct” sehingga ketika menggunakannya, kita tidak perlu menggunakan tanda kurung.

### Fungsi Print_r()

`print_r` ini **digunakan untuk mencetak output ke browser**, namun bedanya, **print_r ini ditujukan untuk mencetak nilai variabel dengan format yang lebih mudah dibaca.**

print_r ini benar-benar merupakan fungsi sehingga kita harus menuliskannya menggunakan tanda kurung `print_r()`

> Output dari `print_r` dapat langsung dicetak ke variabel atau disimpan ke variabel tertentu. Untuk menyimpan ke dalam variabel, kita perlu menambahkan argumen ke dua dengan nilai true, misal: **print_r($argumen1, true)**

### Fungsi Var_dump

Sama seperti yang lain, **fungsi var_dump digunakan untuk mencetak output ke browser, lebih tepatnya mengetahui informasi pada suatu nilai variabel.**

**var_dump merupakan fungsi, sehingga dalam penulisannya, kita harus menggunakan tanda kurung.**

> sama seperti `print_r`, `var_dump` ini digunakan hanya untuk proses debugging, dimana kita ingin mengetahui struktur informasi (nilai dan tipe data) dari suatu variabel

## Case Sensitivity

Case Sensitivity adalah **istilah yang membahas apakah sebuah bahasa pemrograman membedakan penulisan huruf kecil dan huruf besar**.

**PHP tidak membedakan huruf besar dan kecil untuk penamaan fungsi (function), nama class, maupun keyword bawaan PHP seperti echo, while, dan class (bersifat case insensitive).**

Ketiga baris berikut akan dianggap sama oleh PHP:

```php
<?php
   echo "Hello World";
   ECHO "Hello World";
   EcHo "Hello World";
?>
```

Akan tetapi, **PHP membedakan penulisan huruf besar dan huruf kecil (case sensitive) untuk penamaan variabel**. Variabel `$nama`, `$Nama` dan `$NAMA` akan dianggap sebagai **3 variabel yang berbeda**.
