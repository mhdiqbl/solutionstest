<?php
echo "<h3>Reverse String</h3>";
// Code function di sini
function balik_kata($string)
{
$result ="";
$panjang = strlen($string);
for($i = 1; $i <= $panjang; $i++) { 
    $result.=substr($string, $panjang-$i, 1); } 
    return $result; } echo
    balik_kata("abduh"); // hudba
    echo "<br>" ; echo balik_kata("Hai"); //iah
    echo "<br>" ; echo balik_kata("Nama Saya Iqbal"); //labqi ayas aman
?>