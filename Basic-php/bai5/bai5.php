    <?Php
    function strNumber($str){
        $String=preg_replace('/[^0-9]/i', ' ', $str);
            $number = explode(" ", $String);
            $numberlar=$number[0];
            for($i=0;$i<count($number);$i++)
            {
            if($number[$i]>$numberlar){
            $numberlar=$number[$i];
            }
        }
        echo $numberlar;
        }
    $ipt="gh12cdy695m1";
    strNumber($ipt);
    ?>