<?php

//aray
// membuat array
// versi lama
// $hari = array("senin", "selasa", "rabu");
// $bulan = ["Januari", "Februari", "Maret"];
// $arr = [100, "teks", true];

// menampilkan array
// versi debugging
// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// // menampilkan 1 element pada array
// echo "<br>";
// echo $arr[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>

    <?php
    $angka = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
    // cara menampilkannya adalah dengan menulisakan element terluarnya dan index di dalamnya
    // echo $angka[1][1];
    ?>
    <?php foreach ($angka as $a) : ?>
        <?php foreach ($a as $b) : ?>
            <div class="kotak"><?= $b ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
</body>

</html>