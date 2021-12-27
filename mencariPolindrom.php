<?php
class Polidrome{
    function checkPolidrome($kata){
        $arr  = str_split($kata);
    
        for($i=0;$i<=count($arr)-1;$i++){
            if($arr[$i]===$arr[(count($arr)-1-$i)]){
                $polindrome="Yes";
            }else{
                $polindrome="No";
            }
        }
        
        return $polindrome;
    }
}  

$polindrome = new Polidrome;
$check = $polindrome->checkPolidrome('kodok');
if($check=="Yes"){
    echo 'this is Polidrome';
}elseif($check=="No"){
    echo 'this is not Polidrome';
}
?>