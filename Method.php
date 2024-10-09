<?php

class Hewan {
    //property class hewan
    public int $jumlahKaki;
    //membuat method
    public function berjalan() : void {
        //gunakan $this untuk memanggil
        //property didalam class
        echo 'Hewan ini berjalan 
        dengan '.$this->jumlahKaki. ' kaki';
    }
}

//buat object kucing
$kucing = new Hewan();
//mengisi property dari object kucing
$kucing->jumlahKaki = 4;
//memanggil method berjalan
$kucing->berjalan();

