# Variabel dalam PHP

Variabel adalah **kode program yang digunakan untuk menampung nilai dari sebuah data. Nilai ini bisa berupa angka, teks, objek, dan lain-lain**. Sebuah variabel memiliki nama yang digunakan untuk mengakses nilai dari variabel tersebut.

Sepanjang program, **nilai dari variabel dapat diubah isinya dengan nilai lain**.

## Aturan Penulisan Variabel PHP

Untuk membuat variabel, PHP memiliki aturan penulisan sebagai berikut:

1. **Variabel harus diawali dengan tanda dollar ($)**
Setelah tanda dollar, **karakter pertama setelahnya harus berupa huruf atau underscore (_)**.

2. Karakter kedua dan seterusnya bisa berupa huruf, angka, atau underscore (_).

3. **Nama variabel bersifat case sensitif** (huruf besar dan huruf kecil dianggap berbeda).

4. Untuk memberikan nilai kepada sebuah variabel, PHP menggunakan karakter sama dengan **(=)**.

5. Variabel dalam PHP **tidak memerlukan deklarasi terlebih dahulu.**

## Contoh penulisan PHP

### Contoh penulisan yang benar

```php
<?php
   $i;
   $nama;
   $Umur;
   $_lokasi_memori;
   $ANGKA_MAKSIMUM;
?>
```

### Contoh penulisan variabel yang salah

```php
<?php
   $4ever;       //variabel tidak boleh diawali dengan angka
   $_salah satu; //varibel tidak boleh mengandung spasi
   $nama*^;      //variabel tidak boleh mengandung karakter khusus: * dan ^
?>
```

### Tanda sama dengan (=) digunakan untuk memberikan nilai ke dalam variabel

```php
<?php
   $nama = "Tiana";
   $umur = 21;
   $pesan = "Saya sedang belajar PHP";
?>
```

> Contoh ada di file `variabel.php`
