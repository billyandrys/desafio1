<?php

namespace Dominio;
use Persistencia\Fachada as Persistencia;

abstract class Fachada {

    static public function getUsuarios()
    {
        
        $usuarios = Persistencia::getPersistencia();

        $ret = array();

        foreach ($usuarios as $usuario) {
            $ret[] = new Usuario($usuario['id'], $usuario['nombres']);
        }

        return $ret;
    }

}

