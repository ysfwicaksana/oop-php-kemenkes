<?php

class Hewan {

    public string $mata;
    protected bool $kaki;
    private int $jumlahKaki;
    
    public function bernafas() : void {
        echo 'Hewan ini bernafas';
    }

    protected function berenang() : void {
        echo 'Hewan ini berenang';
    }

    private function amfibi() : void {
        echo "Hewan ini amfibi";
    }
}

//buat object kucing, 
$kucing = new Hewan();

//yang akan error
// $kucing->kaki = true;
// $kucing->jumlahKaki = 4;
// $kucing->berenang();
// $kucing->amfibi();

//yang tidak error
$kucing->mata = 'kuning';
echo $kucing->mata .PHP_EOL;
echo $kucing->bernafas();

