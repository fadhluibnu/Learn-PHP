<?php
function salam($waktu = "Datang", $nama = "Admin")
{
    return "Selamat $waktu, $nama!";
}


date_default_timezone_set("Asia/Jakarta");

$jam = date("H:i:s");
if ($jam >= "05:00:00" && $jam < "10:00:00") {
    $salam = "Pagi";
} elseif ($jam < "14:30:00") {
    $salam = "Siang";
} elseif ($jam < "18:00:00") {
    $salam = "Sore";
} elseif ($jam > "18:01:00" || $jam < "05:00:00") {
    $salam = "Malam";
} else {
    $salam = "Datang";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>

<body>
    <h1><?php echo salam($salam, "Fadhlu Ibnu"); ?></h1>

</body>

</html>