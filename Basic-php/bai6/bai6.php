<?php
function strNumber($str){
    $alphabet=range("a","z");
    $d =0; 
    for($i=0;$i<count($alphabet);$i++){
        $d1= substr_count($str,$alphabet[$i]);
        if($d1>$d){
            $d= substr_count($str,$alphabet[$i]);
            $char=  $alphabet[$i]; 
        }
        else if($d1==$d){
            $char=' ';
        }
    }
    echo $char;
}
$ipt="ababbab";
//$ipt="abbas";
//$ipt="aba";
strNumber($ipt);
?>