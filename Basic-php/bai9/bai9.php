<?php
function array_reversed($arr1,$arr2){
    for($i=0;$i<count($arr1);$i++){
        for($j=count($arr2)-$i-1;$j>=0;$j--){
            $my_array[$i]=$arr2[$j];
            $other_array[$j]=$arr1[$i];
        break;
        }
    }
    echo 'my_array: ';
    var_dump($my_array);

    echo '<br> other_array :';
    var_dump($other_array);
}
$my_array= ['a', 'b', 'c'];
$other_array=[1, 2, 3];
array_reversed($my_array,$other_array);
?>