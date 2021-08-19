<?php

// pengulanga
// for
// while
// do.. while
// foreach : pengulangan khusus array
// 1. for()
//ada tiga bagian yaitu:
// - inisialisasi
//menentukan vaiabel awal untuk pengulangan
// - kondisi terminisasi
// untuk memberhentikan kondisi pengulanagan
// - increment / decrement
// agar pengulangan bisa maju atau mundur 
for( $i = 0; $i < 5; $i++ ){
    echo "Hello World (for) <br>";
}
// stars program
// $row = 10;
// for($star1 = 1; $star1 <= $row; $star1++){
//     for ($star2 = 1; $star2 <= $star1; $star2++){
//         echo "*";
//     }
//     echo ("<br>");
// }
// $row1 = 10;
// for ($star3 = $row1; $star3 >= 0; $star3--){
//     for ($star4 = $star3; $star4 >= 0; $star4--){
//         echo '*';
//     }
//     echo "<br>";
// }

$row = 10;
for ($column = $row; $column > 0; $column--){
    for ($space = $column-1; $space > 0; $space--){
        echo "~";
    }
    $unsc = $column-1;
    while ($unsc >= $column-1 && $unsc < $row){
        echo "_";
        $unsc++;
    }
    echo "<br>";
}


// 2. while
// $z = 0;
// while ($z < 5){
//     echo "Hello World (while) <br>";
// $z++;
// }

// 3. do.. while
// do.. while akan berjalan satu kali saat menemui false. berbeda dengan while, kalau while ketemu false langsung berhenti
// $y = 0;
// do{
//     echo "Hello World (do.. while) <br>";
// $y++;
// }while( $y < 5 );


?>