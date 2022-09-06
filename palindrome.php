<?php 
function palindrome($string)
    {
        $result ="";
        $panjang = strlen($string);
        for($i = 1; $i <= $panjang; $i++)
        {
            $result .= substr($string, $panjang-$i, 1);
        }
        if ($string == $result){
            echo $result . " //true <br>";
        }else {
            echo $result . " //false <br>";
        }
    }

// Hapus komentar di bawah ini untuk jalankan code
echo palindrome("civic") ; // true
echo palindrome("nababan") ; // true
echo palindrome("jambaban"); // false
echo palindrome("racecar"); // true
?>