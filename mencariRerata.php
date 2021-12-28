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
    $x           = 0;
    $banyakAngka = [];
    $k           = 0;

    //mencari banyaknya data dan nilai tengah
    for($i=0;$i<=$banyakData-1;$i++){
        $jumlahNilai +=$arrRerata[$i];
        $tengah =($banyakData-1)/2;
        $median = $arrRerata[$tengah];
        
    }

    //Nilai yang sering muncul


    print_r(array_count_values($arrRerata));
    echo "<br>";
    $x = $jumlahNilai/$banyakData;
    echo 'Nilai rata-rata : '.round($x,2)."<br/>";
    echo 'Nilai tengah(median) : '.$median;
}
rerata();
?>