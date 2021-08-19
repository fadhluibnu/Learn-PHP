<?php
// $x = 10;


// function tampil()
// {
//     // variabel di dalam function hanya berlaku di dalam function tersebut
//     // cara memanggil variabel global/diluar function kita hanya perlu menuliskan global
//     global $x;
//     echo $x;
// }

// tampil();

// variabel superglobal
// $_GET, $_POST, $REQUEST, $_SESSION, $_COOKIE, $_SERVER




// superglobal
// variable global milik php 
// merupakan array assosiative
// echo $_SERVER["OPENSSL_CONF"];





// $_GET
// $_GET["nama"] = "Fadhlu Ibnu";
// $_GET["nrp"] = "3103120079";

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
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"] ?>&nrp= <?= $mhs["nrp"] ?>&email= <?= $mhs["email"] ?>&jurusan= <?= $mhs["jurusan"] ?>&gambar=<?= $mhs["gambar"] ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>