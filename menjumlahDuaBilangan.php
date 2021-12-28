<?php

$arr =[1,2,3,4,5,6,7,8,9,10];
for($i=0;$i<count($arr);$i++){
    $j=$i+2;
    if($j!==count($arr)-1 && $j!==count($arr)){
       $sum =$arr[$i]+$arr[$j];
       if($sum == 8){
         echo $sum;
         break;
       }
    }
}
?>