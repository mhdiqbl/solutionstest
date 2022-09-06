<?php 
function tentukan_nilai($angka)
{
    if ($angka <= 98 && $angka >=77) {
        echo $angka . " //Sangat Baik <br>";
    }elseif ($angka <= 76 && $angka >=68) {
        echo $angka . " //Baik <br>";
    }elseif ($angka <= 67  && $angka >=44) {
        echo $angka . " //Cukup <br>";
    }elseif ($angka <= 43 && $angka >=1) {
        echo $angka . " //Kurang <br>";
    }
}

// Hapus komentar di bawah ini untuk jalankan code
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang
?>