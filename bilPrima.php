<?php
function bilPrima($bil){
    for($i=1;$i<$bil;$i++){
        $a=0;
        for($j=1;$j<=$i;$j++){
            if($i%$j==0){
               $a++;
            }
        }
        if($a==2){
            echo $i.' ';
        }
    }
}
bilPrima(10);
?>