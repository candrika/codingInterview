<?php
function star($bil){
    for($bil=10;$bil >= 0;$bil--){
        // echo "";
        for($j=$bil;$j<=10;$j++){
            echo "*";
        }
        for($j=1;$j<=$bil+1;$j++){
            echo "x";
        }
        echo "<br>";
    }
}
star(10);
?>