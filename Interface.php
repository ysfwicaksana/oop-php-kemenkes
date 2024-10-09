<?php
//interface class
interface Hewan {
    public function bergerak();
    public function berenang();
}

class Kucing implements Hewan {}

//error karena harus mendefinisikan ulang
//di kelas kucing
$kucing = new Kucing();

