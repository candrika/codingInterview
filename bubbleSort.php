<?php
function bubbleSort(&$arr){
    $len = sizeof($arr);
    // echo $len;
    for($i=0;$i < $len;$i++){
        for($j=0;$j < $len-$i-1; $j++){
            if($arr[$j] > $arr[$j+1]){
                $temp = $arr[$j];
                $arr[$j]=$arr[$j+1];
                $arr[$j+1]=$temp;            
            }
        }
    }
}

$arr= [64, 34, 25, 12, 22, 11, 90];
$n  = sizeOf($arr);
bubbleSort($arr);
for($i=0;$i<$n;$i++)
    echo $arr[$i].',';
?>