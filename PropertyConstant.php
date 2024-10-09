<?php

class Hewan {

    //property class hewan
    public string $mata;
    public bool $kaki;
    public int $jumlahKaki;

    //constant class hewan
    public const BERNAFAS = 'Semua hewan bernafas';

   
}

//buat object kucing
$kucing = new Hewan();
//mengisi property dari object kucing
$kucing->mata = 'biru';
$kucing->kaki = true;
$kucing->jumlahKaki = 4;

//menampilkan hasilnya
echo $kucing->mata .PHP_EOL;
echo $kucing->kaki .PHP_EOL;
echo $kucing->jumlahKaki .PHP_EOL;
echo Hewan::BERNAFAS;
