<?php
function binarySearch(array $arr,$x){
    if(count($arr)===0) return false;
    $low  = 0;
    $high = count($arr)-1;

    while($low<=$high){
        $mid =floor(($low+$high)/2);
        if($arr[$mid]==$x){
            return true;
        }
        if($x < $arr[$mid]){
            $high=$mid-1;
        }else{
            $low=$mid+1;
        }
    }
    return false;
}
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$value=6;
if(binarySearch($arr,$value)==true){
    echo "Exist";
}else{
    echo "Not Exist";
}
?>