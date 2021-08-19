<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa/query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// Ambil Data (fetch) Dari objek result
// mysqli_fetch_row() (menegmbalikan array numerik / indeksnya angka)
// mysqli_fetch_assoc() (array assosiatif)
// mysqli_fetch_array() (array assosiatf dan numerik tp kekurangannya adalah di dalam arraynya datanya dobel)
// mysqli_fetch_object() (tidak punya array numerik dan assosiatif)
// while ($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No .</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Emal</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1 ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"] ?>" alt="" width="50px"></td>
                <td><?= $row["nrp"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
            <?php $i++ ?>
        <?php endwhile; ?>
    </table>
</body>

</html>