<?php
function tukar_besar_kecil($string){
    $n = strlen($string); 
    for($i = 0; $i < $n; $i++) {
        if(ctype_lower($string[$i])) {
            $besar = strtoupper($string[$i]);
            echo $besar;
        }else{
            $kecil= strtolower($string[$i]);
            echo $kecil;
        }
}
echo "<br>";
}

echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"
?>