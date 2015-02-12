<?php

namespace Persistencia;

use Persistencia\Db;
use Persistencia\Mysql;

/**
 * Description of Fachada
 *
 * 
 */
abstract class Fachada
{

    static public function getPersistencia()
    {

        $bd = new Db(new Mysql());
        $sql = new Sql();
        $sql->addTable('usuarios');

        return $bd->ejecutar($sql);
    }

}

