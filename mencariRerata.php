<?php
/*====================================
|| mecari nilai rerata dari array
|| mencari nilai tengah
|| mencari nilai yang yang terbanyak
|| |X| = jumlah nilai/banyaknya data
||====================================*/

function rerata(){
    $arrRerata   = [100,80,70,90,50,60,60,70,60,75];
    $jumlahNilai = 0;
    $banyakData  = count($arrRerata);
    $median      = "";
    $banyakAngka = [];
    $k           = 0;
    $modus       = "";
   
    //mencari banyaknya data dan nilai tengah dan modus(nilai yang paling banyak muncul)
    for($i=0;$i<=$banyakData-1;$i++){
        $jumlahNilai +=$arrRerata[$i];
        $tengah =($banyakData-1)/2;
        $median = $arrRerata[$tengah];

        //mencari nilai terendah
        $j=$i+1;
        if($j!=$banyakData){
            if($arrRerata[$i] === $arrRerata[$j]){
               $k +=1;
                if($k >= 1){
                    $modus = $arrRerata[$i];
                }
            }
        }        
    }
    
    $x = $jumlahNilai/$banyakData;
    echo 'Modus : '.$modus."<br/>";
    echo 'Nilai rata-rata : '.round($x,2)."<br/>";
    echo 'Nilai tengah(median) : '.$median;
}
rerata();
?>