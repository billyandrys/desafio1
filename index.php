<?php

require './Configuracion.php';
use Presentacion\Fachada as View;

abstract class Index {

    public static function main()
    {
        View::allUser();
    }

}

Index::main();
















