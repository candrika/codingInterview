<?php
class Kamus{
    private $kamus=[];

    function tambahKata($kataKunci,$padanKata){
        $i=0;
        foreach($padanKata as $value){
            $this->kamus[$kataKunci][$i]=$value;
            $i++;
        }
    }

    function ambilKata($kataKunci){
        return $this->kamus[$kataKunci];
    }

    function ambilSemuaKata(){
        return $this->kamus;
    }
}

$kamus = new Kamus;
//tambah kata
echo '<pre/>';
$tambahKata = $kamus->tambahKata('abang',['kakak','kanda','mas','aa']);
print_r($kamus->ambilKata('abang'));
?>