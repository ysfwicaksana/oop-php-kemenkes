<?php

//parent class
class Hewan {

    protected function bergerak() : void {
        echo "hewan ini berjalan dengan kaki";
    }

    //kode lainnya
}

class Ikan extends Hewan {
    //nama method sama seperti parent
    public function bergerak() : void {
        echo "ikan ini berjalan dengan sirip";
    }
}

$ikan = new Ikan();
//output nya akan berjalan dengan sirip
$ikan->bergerak();
