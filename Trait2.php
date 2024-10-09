<?php
//trait class
trait Hewan {

    public int $jumlahKaki;

    public function bergerak() : void {
        echo "hewan ini berjalan dengan kaki";
    }
}

trait Mamalia {
    public function menyusui() : void {
        echo "hewan ini menyusui";
    }
}

class Kucing {
    use Hewan, Mamalia; //menggunakan trait Hewan dan Mamalia
}

$kucing = new Kucing();
$kucing->jumlahKaki = 4;
echo $kucing->jumlahKaki;
$kucing->bergerak();
$kucing->menyusui();