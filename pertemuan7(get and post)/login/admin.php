<?php
date_default_timezone_set("Asia/Jakarta");
$jam = date("H:i:s");
if ($jam > "05:30:00" && $jam <= "10:00:00") {
    $salam = "Pagi";
} elseif ($jam <= "14:40:00") {
    $salam = "Siang";
} elseif ($jam <= "17:00:00") {
    $salam = "Sore";
} else {
    $salam = "Malam";
}
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
    <h1>Selamat <?= $salam; ?> Admin</h1>
    <a href="login.php">Logout</a>
</body>

</html>