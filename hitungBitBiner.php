<?php
class Biner{
    public function convertBiner($decimal){
        $hasil="";    
        $biner='';
        
        while($decimal>0){
            if($decimal%2==0){
                $decimal =$decimal/2;
                $biner .=0;
                
            }else{
                $decimal=($decimal/2)-0.5;
                $biner .=1;
               
            }
            $hasil =strrev($biner);
        }
        return $hasil;
    }

    function hitungBiner($decimal,$bit){
        $numBiner     = $this->convertBiner($decimal);
        $countOfBiner = strlen($numBiner);
        $arrayBiner   = str_split($numBiner);        
        $numOfBiner   = 0;

        echo $numBiner."<br>";

        for($i=0;$i<=$countOfBiner-1;$i++){
            if($arrayBiner[$i]==$bit){
                $numOfBiner +=1;
            }
        }

        return $numOfBiner;
    }
}

$biner = new Biner;
echo $biner->hitungBiner(13,1);
?>