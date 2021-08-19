<?php
// $mahasiswa = [
//     ["Fadhlu Ibnu ", "07859008900", "RPL", "f.ibnu.a1@gmail.com"],
//     ["Abbad", "07859001234", "RPL", "f.ibnu.a1@gmail.com"],
//     ["Ibnu", "07851245634", "RPL", "f.ibnu.a1@gmail.com"]
// ];




// array assosiatif
// definisi sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa  = [
    [
        "nama" => "Fadhlu Ibnu ",
        "nrp" => "07859008900",
        "email" => "f.ibnu.a1@gmail.com",
        "jurusan" => "RPL",
        "gambar" => "fadhluabbadght.png"
    ],
    [
        "nama" => "Ibnu",
        "nrp" => "07859237900",
        "email" => "f.ibnu.a2@gmail.com",
        "jurusan" => "TKJ",
        "gambar" => "fadhluabbadght.png"
        // "tugas" => [90, 80, 100]
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><img src="img/<?= $mhs["gambar"] ?>" alt="" width="100px"></li>
            <li>Nama : <?= $mhs["nama"] ?></li>
            <li>NRP : <?= $mhs["nrp"] ?></li>
            <li>Jurusan : <?= $mhs["jurusan"] ?></li>
            <li>Email : <?= $mhs["email"] ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>