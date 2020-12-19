<?Php
function reverseVowels($str){
    $ipt=$str;
    $strlen=strlen($str);
    $vowels="(a,e,i,o,u)";
    $d=0;
    for($i=0;$i<$strlen;$i++){
    for($j=$strlen-$d-1;$j>=0;$j--){
        $pos=strripos($vowels, $str[$i]);
        $pos1=strripos($vowels, $str[$j]);
        if($pos>0 && $pos1>0){
            $ipt[$i]=$str[$j];
            $ipt[$j]=$str[$i]; 
            $d=$strlen-$j;
        break;
        }
    }
}
echo $ipt;  
}
$ipt="Reverse Vowels In A String Reverse Vowels In A String";
reverseVowels($ipt);
?>