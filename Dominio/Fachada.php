<?php
namespace Dominio;
use Dominio\Usuario;



abstract class Fachada
{
    static public function getUsuarios()
    {
        return Usuario::getUsuarios();
    }
    
       
    
}

