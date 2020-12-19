    <?php
    function LetterChanges($str){
        $alphabet=range("a","z");
        //var_dump($alphabet)
        for($i=0;$i<strlen($str);$i++){
            for($j=0;$j<count($alphabet);$j++){
                
                if($str[$i]==$alphabet[$j]){
                    if($j==count($alphabet)-1){
                        $str[$i]=$alphabet[0];
                    }
                    else{
                        $str[$i]=$alphabet[$j+1];
                    }
                    
                break;
                }
            }
        }
        //echo $str;
        $str1="(a, e, i, o, u)";
        for($i=0;$i<strlen($str);$i++){
            for($j=0;$j<strlen($str1);$j++){
                if($str[$i]==$str1[$j]){
                    $str[$i]=strtoupper($str[$i]);
                }
            }
        }
        echo $str;
    }
    $ipt="hello*3";
    $ipt="fun times!";
    LetterChanges($ipt);

    ?>

