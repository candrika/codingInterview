<?php
function isLucky($n){
    $counter=2;

    if($counter==$n){
        return true;
    }
    if($n%$counter==0){
        return false;
    }

    $next = $n-($n/$counter);

    $counter++;

    return isLucky($next);
}
$x=2;
if(isLucky($x)){
    echo $x," is a lucky number";
}else{
    echo $x," is not a lucky number";
}
?>