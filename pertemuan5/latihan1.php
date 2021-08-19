<?php

// array
// variabel yang dapat memiliki banyak nilai
// element array bp=oleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0



// membuat array

// cara lama
$hari = array("Senin", "Selasa", "Rabu");

// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// menapilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// menampilkan 1 element pada array
// echo "<br>";
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// manambahkan element baru pada array
var_dump($hari);
$hari[] = "Kamis";
echo "<br>";
var_dump($hari);
