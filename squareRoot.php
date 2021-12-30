<?php
class squareRoot{
    function operation($bil){
        /* 
            1. n=4
            2 init x=4, y=1
            next approximation x=(x+y)/2
            y=n/x
        */
        $x=$bil;
        $y=1;
        while($x > $y){
            $x = ($x+$y)/2;
            $y = $bil/$x;
            
        }

        return $x;
    }
}
$squareRoot = new squareRoot;
$bil = 9;
echo 'Akar kuadrat dari '.$bil.' = '.$squareRoot->operation($bil); 
?>