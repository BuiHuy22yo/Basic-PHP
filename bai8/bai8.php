<?php

function commas($number){
    $number=number_format($number,3,".",",");
    echo $number;
}
$number=19999111.4367;
commas($number);

?>