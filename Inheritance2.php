<?php

//parent class
class Hewan {

    protected string $mata;

    //kode lainnya
}

//child class
class Kucing extends Hewan {

    public function setMata(string $mata) : void {
        $this->mata = $mata;
    }

    public function getMata() : void {
        echo $this->mata;
    }
}

$kucing = new Kucing();
$kucing->setMata('biru');
$kucing->getMata();
