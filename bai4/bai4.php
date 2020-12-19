    <?php
    
    function backspace($str){
        $d=substr_count($str,"#");
        for($j=0;$j<$d;$j++){
            for($i=0;$i<strlen($str);$i++){
                if($str[0]=='#'){
                    $str=ltrim($str,'#');
                    continue;
                }
                else if($str[$i]=='#' & $str[0]!='#'){
                   $th=substr($str, $i-1, 2);
                   $str=str_replace($th,'',$str);
                break;
                }
            }
        }
        echo $str;
    }
    $ipt="abc#d##c";
    //$ipt="abc##d######";
    //$ipt="########";
    //$ipt="";
    backspace($ipt)
    ?>