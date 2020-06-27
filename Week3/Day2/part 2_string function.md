# String dan Array Function

## String Function pada PHP

### Fungsinya

1. Mengubah huruf besar > kecil
2. Melakukan pencarian
3. Pemotongan String
4. Memformat tampilan
5. Memproses Hasil Inputan Form

## Function strtolower() dan strtoupper()

1. `strtolower()` => Mengkonversi teks string menjadi huruf kecil
2. `strtoupper()` => Mengubah teks string menjadi huruf besar

Contoh pada file strtolowerupper.php

## Function ucfirst() dan lcfirst()

1. `ucfirst()` => Membuat karakter pertama pada sebuah string menjadi huruf besar
2. `lcfirst()` => Membuat karakter pertama pada sebuah string menjadi huruf kecil

## Function strlen()

Digunakan untuk mencari panjang dari sebuah string termasuk karakter whitespace (spasi)

## Function trim(), ltrim(), rtrim()

Digunakan untuk menghapus spasi/karakter lain (-,_,#) dari kedua sisi string / salah satunya.

1. `trim()` => Menghapus kedua sisi string
2. `ltrim()` => Menghapus sisi kiri string
3. `rtrim()` => Menghapus sisi kanan string

file trim.php

## Function str_pad()

Menambahkan karakter di awal,akhir, atau kedua string

**Membutuhkan 2 argumen utama & 2 argumen opsional**

1. Menampung string yang akan di proses
2. Menentukan berapa panjang string
3. tambahan jika string < argumen ke-2
4. menentukan dimana karakter akan di tambahkan (awal/akhir) > Default: di akhir

## Function Explode()

Digunakan untuk mengkonversi sebuah string menjadi array

**Membutuhkan 3 argumen wajib & 1 argumen opsional**

1. Karakter pemisah (, /)
2. string yang ingin dikonversi

struktur dasar 

`explode(separator, string, limit);`

contoh di fle explode.php
