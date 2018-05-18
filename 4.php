<?php
$nominal = 
[
    500,
    1000,
    2000,
    5000,
    10000,
    20000,
    50000,
];

$uang = $nominal[6];
$belanja = 8000;
$kembali = $uang-$belanja;
echo 'uang yang dimasukkan : Rp.'.number_format($uang, 2).'<br>';
echo 'belanja : Rp.'.number_format($belanja, 2).'<br>';
echo 'kembali : Rp.'.number_format($kembali, 2).'<br>';

?>
