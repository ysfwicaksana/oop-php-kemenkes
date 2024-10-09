<?php
//abstract class
abstract class Hewan {

    public string $nama;
    
    //abstract method
    abstract public function bergerak() : void;
    abstract protected function berenang() : void;

}

class Kucing extends Hewan {

    //definisikan ulang method
    public function bergerak() : void {
        echo "kucing ini bergerak dengan kaki";
    }

    //definisikan ulang method
    public function berenang() : void {
        echo "kucing ini berenang";
    }
}

//akan error karena abstract class method
//harus didefinisikan ulang di class Kucing
$kucing = new Kucing();
$kucing->bergerak();
$kucing->berenang();