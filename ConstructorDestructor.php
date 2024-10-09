<?php

class Hewan {

    public int $jumlahKaki = 4;
    //constructor akan dijalankan secara otomatis
    //setelah object dibuat
    public function __construct($nama) {
        echo $nama. 'diciptakan Tuhan';
    }
    
    public function berjalan() : void {
        echo 'Hewan ini berjalan 
        dengan '.$this->jumlahKaki. ' kaki';
    }

    public function __destruct() {
        echo 'Hewan ini meninggal';
    }
}

//buat object kucing, 
//dan menampilkan hasil constructor
$kucing = new Hewan('Zen');

//menjalankan kode selanjutnya
$kucing->jumlahKaki = 4;
$kucing->berjalan();

