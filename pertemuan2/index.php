<?php
    echo "Fadhlu Ibnu (echo)";
    print "Fadhlu Ibnu (print)";
    echo 12345;
    print 6789;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar php</title>
</head>
<body>
    <!-- 1. Php di dalam Html-->
    <!-- <h1>Belajar PHP di <?php //echo "shinaukode.online" ?> </h1> -->

    <!-- 1. html di dalam php-->
    <?php
        echo "<h1>Belajar PHP di shinaukode.online</h1>"
    ?>
</body>
</html>

<?php
//variabel
//syarat variabel
//ini tidak boleh
// $1website = "shinaukode.online"

//ini boleh
$website1 = "shinaukode.online";


$website = "shinaukode.online";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Belajar PHP di <?php echo $website; ?> </h1>
</body>
</html>

<?php
//aritmatika
$x = 10;
$y = 5;
echo $x * $y;

//concatenasi
$nama_website = "shinaukode";
$nama_ekstensi_website = ".online";
echo $nama_website . $nama_ekstensi_website;

//assignment
// =, +=, -= , /= , %=, .=
$x = 1;
$x = 5;
echo $x;

$nama_web = "shinaukode";
$nama_web .= ".online";
echo $nama_web;

//perbandingan
// <, >, <=, >=, ==
// var_dump(1>5); 
// var_dump(1=="1")  
var_dump(1==="1");

//Logika
// and (&&), or (||), not (!)
$z = 30;
var_dump($z < 20 && $z % 2 == 0);
var_dump($z < 20 / $z % 2 ==0)

?>