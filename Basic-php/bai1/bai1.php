    <?php
    function LongestWord($sen){
        $String=preg_replace('/[^a-z]/i', ' ', $sen);
        $word = explode(" ", $String);
        $strlen=strlen($word[0]);
        for($i=0;$i<count($word);$i++)
        {
        if(strlen($word[$i])>$strlen){
        $strlen=strlen($word[$i]);
        $wordlar=$word[$i];
        }
    }
    echo $wordlar;
    }
    $ipt="fun&!! time";
    $ipt="I love dogs";
    LongestWord($ipt);
?>