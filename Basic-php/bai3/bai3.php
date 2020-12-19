        <?php
        function createPhoneNumber($Number){
        $PhoneNumber=implode('',$Number);
        $PhoneNumber = sprintf("(%s) %s-%s",
        substr($PhoneNumber, 0, 3),
        substr($PhoneNumber, 3, 3),
        substr($PhoneNumber, 6));
        echo $PhoneNumber;
        } 
        $Number=array(1, 9, 3, 4, 7, 6, 7, 3, 9, 0);
        createPhoneNumber($Number);
       
        ?>
