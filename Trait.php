<?php
//trait class
trait Hewan {

    public int $jumlahKaki;

    public function bergerak() : void {
        echo "hewan ini berjalan dengan kaki";
    }
}

class Kucing {
    use Hewan; //menggunakan trait
}

$kucing = new Kucing();
$kucing->jumlahKaki = 4;
echo $kucing->jumlahKaki;
$kucing->bergerak();