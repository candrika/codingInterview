<?php
function linearSearch(array $arr,$x){
    for($i=0;$i<count($arr);$i++){
        if($arr[$i]===$x){
            return $i;
        }
    }
    return -1;
}
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$value=6;
if(linearSearch($arr,$value)==-1){
    echo "Element is not present in array";
}else{
    echo "Element is present in array in index ",linearSearch($arr,$value);
}
?>