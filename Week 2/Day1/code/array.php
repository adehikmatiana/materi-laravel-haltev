<?php

// file biasanya kita tulis spt ini:
// $siswa0 = "tiana";
// $siswa1 = "hikma";
// $siswa2 = "ade";
// $siswa3 = "raden";
// $siswa4 = "sangunda";
// echo $siswa0;

// echo "<br>";

// // modifikasi dengan ARRAY
$tempat_lahir = array("bekasi", "jayapura");
$siswa = array("tiana", "hikma",  "ade", "raden", "sangunda");

echo "nama sayaa  $siswa[0]  dan saya lahir di  $tempat_lahir[1]";

// echo "<br>";
// modifikasi dengan SHORT SINTAX ARRAY

$siswa = ["hikma", "tiana", "ade", "SANGUNDA", "RADEN"];

// echo $siswa[4];

echo "<br>";
// cara penggunaan Array

echo "<h2>Murid itu bernama  $siswa[2] ";
