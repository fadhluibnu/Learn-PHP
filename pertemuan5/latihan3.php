<?php
// multi array
$mahasiswa = [
    ["Fadhlu Ibnu ", "07859008900", "RPL", "f.ibnu.a1@gmail.com"],
    ["Abbad", "07859001234", "RPL", "f.ibnu.a1@gmail.com"],
    ["Ibnu", "07851245634", "RPL", "f.ibnu.a1@gmail.com"]
];

// $keterangan = ["Nama : ", "NIS : ", "Jurusan : ", "Email : "];
// for ($x = 0; $x <= 4; $x++) {
//     $i = $x;
// };

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
            <?php foreach ($mhs as $siswa) : ?>
                <li><?= $siswa; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>

</body>

</html>