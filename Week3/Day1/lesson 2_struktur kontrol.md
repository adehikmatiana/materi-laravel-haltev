# Struktur Kontrol pada PHP

Struktur control pemrograman PHP berkaitan dengan bagaimana sebuah kode program berjalan. Kita akan mempelajari **stuktur kontrol seperti if, else if**. Setelah itu juga akan dibahas tentang **perulangan for, while, do while dan foreach**.

## Struktur Logika IF

Struktur logika IF digunakan untuk mengatur kapan sebuah kode program akan dijalankan.

Penulisan struktur IF setidaknya membutuhkan 2 bagian, yakni kondisi (atau disebut juga sebagai expression) dan statement:

```php
<?php
  if (kondisi) {
    statement;
  }
?>
```

### Contohnya

```php
<?php
   $user="admin";

   if ($user=="admin") {
     echo "Selamat datang Admin!";  // Selamat datang Admin!
   }
 ?>
```

## Multiple IF

```php
<?php
  if (kondisi) {
    statement1;
    statement2;
  }
  if (kondisi) {
    statement3;
    statement4;
  }
?>
```

<!-- contoh pada nested id.php -->

> Statement bisa terdiri dari satu, dua atau ratusan baris perintah PHP. **Baris ini hanya akan dijalankan selama kondisi bernilai TRUE**. **Jika kondisi menghasilkan nilai FALSE, statement tidak akan dijalankan**. Tanda kurung kurawal ‘{‘ dan ‘}’ menandakan blok kode program yang akan diproses ketika kondisi TRUE.

## Struktur Logika ELSE dan ELSE IF

Pada dasarnya, struktur logika ELSE dan ELSE IF hanya perpanjangan dari struktur IF. Bagian ELSE dijalankan ketika kondisi IF tidak sesuai atau FALSE.

<!-- buka file else_admin.php-->

### Multiple ELSE dan ELSE IF

Untuk kode program yang cukup kompleks, kita bisa mengkombinasikan beberapa struktur ELSE IF
<!-- else_multiple_admin.php -->

## Operator Conditional

**Operator conditional merupakan satu-satunya operator ternary dalam PHP** (operator yang membutuhkan 3 buah operand).

Fungsi dari operator conditional mirip dengan kondisi IF ELSE tapi lebih singkat. Oleh karena itulah juga sering disebut sebagai **PHP Shorthand If Else.**

Contohnya

```php
<?php
  if (7 > 5){
    $hasil = "Benar";
  } else{
    $hasil ="salah";
  }
  echo $hasil;
?>
```

Dengan menggunakan Operator Conditional, kode program bisa disederhanakan menjadi seperti ini:

```php
<?php
  $hasil = ( 7 > 5) ? "benar" : "salah";
  echo $hasil;
?>
```

Struktur dasar

`$hasil = kondisi ? "hasil jika kondisi true" : "hasil jika kondisi false";`

```php
<?php
 $user="guest";

 $salam = ($user=="admin") ? "Welcome Admin!" : "Maaf, anda bukan Admin";

 echo $salam; // Maaf, anda bukan Admin
?>
```

## Struktur Perulangan FOR

Struktur perulangan (atau dalam bahasa inggris disebut dengan loop) adalah kode program untuk mengulang beberapa baris perintah.

Untuk membuat perulangan, harus tersedia 3 komponen, yaitu:

1. Kondisi awal perulangan.
2. Perintah program yang akan diulang.
3. Kondisi akhir dimana perulangan harus berhenti.

### Struktur dasar

```php
for (start; condition; increment)
 {
   statement;
   statement;
 }
```

**Start adalah kondisi awal perulangan.** Bagian ini biasanya diisi dengan sebuah variabel yang berfungsi sebagai counter (variabel pengontrol perulangan). **Menjadi standar tidak resmi,** variabel counter ditulis dengan $i.

> Jika kita ingin mulai dari angka 1, kondisi start ditulis sebagai $i = 1.

**Condition adalah kondisi yang menentukan kapan perulangan selesai.** Dalam setiap perulangan (di kenal juga dengan istilah iterasi), condition akan terus diperiksa. Selama condition bernilai TRUE, iterasi akan dilakukan terus menerus.

**Increment adalah bagian yang digunakan untuk mengatur penambahan variabel counter pada setiap iterasi.** Biasanya kita menggunakan operator increment seperti $i++.

**Statement adalah bagian kode program yang akan diulang.** Statement harus berada di dalam tanda kurung kurawal ‘{‘ dan ‘}’, kecuali statement tersebut hanya terdiri dari 1 baris.

### Contoh

```php
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>

<body>
  Pilih Tanggal :
  <select name="tgl">
    <?php
    for ($i = 1; $i <= 31; $i++) {
      echo "<option value = $i > $i </option>";
    }
    ?>
  </select>
  
</body>
</html>
```

Challanges: buat lengkap tanggal, bulan dan tahun 

<!-- buka file for_pilih_tanggal.php -->

## Struktur Perulangan WHILE

Salah satu syarat dari perulangan FOR yang baru saja kita pelajari adalah kondisi akhir perulangan sudah harus diketahui. Misalnya kita harus bisa memastikan perulangan akan dilakukan 10 kali, 100 kali, atau 1000 kali. Tapi bagaimana jika kondisi akhir ini belum bisa dipastikan?

Struktur dasar perulangan WHILE di dalam PHP adalah sebagai berikut:

```php
start;
while (condition)
{
  statement;
  statement;
  increment;
}
```

**Start adalah kondisi awal perulangan, disini kita bisa mempersiapkan variabel counter yang digunakan untuk mengatur condition.**

**Condition adalah kondisi yang harus dipenuhi agar perulangan berlangsung.** Kondisi ini mirip seperti dalam perulangan FOR. Selama condition bernilai TRUE, perulangan akan terus dilakukan. Condition akan diperiksa pada tiap perulangan. Jika hasilnya FALSE, proses perulangan akan berhenti.

**Statement adalah kode program yang akan diulang. Kita bisa membuat kode program yang simple seperti perintah echo, atau kumpulan perintah yang lebih kompleks**. Tanda kurung kurawal diperlukan untuk membatasi blok program yang akan diulang. Jika statement hanya terdiri dari 1 baris, tanda kurung kurawal boleh tidak ditulis.

**Increment juga sama seperti pada perulangan FOR, yakni untuk mengatur agar variabel counter naik/turun.** Pada perulangan WHILE, bagian increment ini juga bisa berupa sebuah statement yang akan merubah condition menjadi FALSE. Jika di dalam perulangan tidak ada suatu kode program yang mengubah variabel counter, proses perulangan tidak akan pernah berhenti (infinity loop).

```php
<?php
$i = 1;
while ($i <= 10) {
  echo "<p>Saya sedang belajar PHP</p>";
  $i++;
}
```
<!-- buka file while_belajar_php_10x.php -->

> Infinity Loop lebih mungkn terjadi pada kasus dengan WHILE (contoh ketika kita tidak menuliskan Increment pada baris akhir, maka akan terus looping)

## Struktur Perulangan DO WHILE

Perulangan `WHILE` dan `DO WHILE` pada dasarnya hampir sama. **Perbedaan terletak pada lokasi pengecekan kondisi perulangan.**

Dalam struktur `WHILE`, **pengecekan kondisi perulangan di lakukan di awal.** Jika kondisi tidak terpenuhi, perulangan tidak akan pernah dijalankan.

Namun pada perulangan `DO WHILE`, **pengecekan kondisi dilakukan di akhir, sehingga walaupun kondisi menghasilkan FALSE, perulangan akan tetap berjalan minimal 1 kali.**

Struktur penulisan DO WHILE dalam PHP:

```php
start;
do {
  statement;
  statement;
  increment;
} while (condition);
```

<!-- buka file while_vs_do_while.php -->

## Struktur Perulangan FOREACH

Struktur FOREACH adalah **perulangan khusus yang digunakan untuk menangai data array.**

Struktur dasar penulisan FOREACH:

```php
foreach ($nama_array as $value)
{
  statement (...$value...)
}
```

<!--  buka file for_vs_foreach.php-->