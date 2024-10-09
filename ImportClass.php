<?php
//class kucing dimasukan ke namespace Hewan\Mamalia
namespace Hewan\Mamalia;
//memanggil atau import file Namespace.php
require('./Namespace.php');
//namespace Satu\Hewan dimasukan ke dalam class kucing
use Satu\Hewan\Hewan;

class Kucing {

    public function __construct() {
        new Hewan();
    }
}

$kucing = new Kucing();