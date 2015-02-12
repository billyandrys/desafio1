<?php

namespace Dominio;

class Usuario
{

    private $_id;
    private $_nombre;
    
    public function __construct($id, $nombre)
    {
        $this->_id = $id;
        $this->_nombre = $nombre;
    }

    public function __toString()
    {
        return $this->_nombre;
    }

}

