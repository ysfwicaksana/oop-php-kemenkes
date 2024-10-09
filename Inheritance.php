<?php

//parent class
class Hewan {

    public string $mata;
    public int $jumlahKaki = 4;

    public function bernafas() : void {
        echo 'Hewan ini bernafas';
    }
}

//child class
class Kucing extends Hewan {}

$kucing = new Kucing();
$kucing->mata = 'biru';
echo $kucing->mata .PHP_EOL;

$kucing->bernafas();