<?php
//date() function ini membutuhkan parameter
// echo date("l, d-M-Y");

// time
// time memiliki UNIX Timestamp / asal mula waktu komputer
// echo time();
// echo date("d M Y", time() + 60 * 60 * 24 * 16);

//membuat detik sendiri
//mktime(0,0,0,0,0,0);
// jam, menit, detik, bulan, tanggal, tahun
echo date("l", mktime(0, 0, 0, 1, 27, 2005));

// strtotime();
// echo date("l",strtotime("25 aug 2005"));
