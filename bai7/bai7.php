<?php
function  Vowel_Count($str){
    $vowels="(a, e, i, o, u)";
    $count=0;
    for($i=0;$i<strlen($str);$i++){
        for($j=0;$j<strlen($vowels);$j++){
            if($str[$i]==$vowels[$j]& $str[$i]!=" "){
                $count++;
            }
        }
    }
    echo $count;
}
$str="Return the number count of vowels in the given string.";
echo $str.'<br> ';
Vowel_Count($str);
?>