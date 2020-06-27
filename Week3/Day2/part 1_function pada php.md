# Function pada PHP

Function atau fungsi merupakan inti dari konsep pemrograman yang dikenal sebagai procedural programming.

Function diperlukan untuk memecah alur program yang besar menjadi beberapa kode program kecil agar mudah di kelola.

Di dunia programming, function kadang disebut sebagai subroutine (subrutin) atau procedure (prosedur).

[link](https://www.php.net/manual/en/language.functions.php)

## Function di PHP

Secara umum, fungsi di PHP dibagi menjadi 2 bagian besar:

1. Built-in Function : disediakan oleh PHP
2. User Defined Function : Membuat sendiri

## User Defined Function

```php
// biasa
function namafungsi()
{
   kumpulan kode yang akan dijalankan;
}

// dengan 1 parameter

function namafungsi($parameter) 
{
   kumpulan kode yang akan dijalankan ;
}

// dengan 2 parameter
function namafungsi($parameter1,$parameter2) 
{
   kumpulan kode yang akan dijalankan;
}
```

contoh di file userdefined.php

## Built-in Function

Function yang sering dipakai adalah **string** dan **utility**

### String

1. strlen() => untuk menghitung panjang sebuah string
2. strcmp() => membandingkan sebuah string
3. explode() => mengkonversi string menjadi array

### Utility

1. var_dump() => mencetak isi dari sebuah array
2. Isset() => untuk cek sebuah variabel sudah pernah dibikin atau belum
3. Empty() => untuk cek sebuah variabel yang kita buat ada yang kosong atau ngga
4. die() => memberhentikan program
5. sleep() => memberhentikan **sementara** program
