<?php
namespace Dominio;
use Persistencia\Fachada as FachadaPersistencia;

class Usuario
{
    static public function getUsuarios()
    {
                      
           return FachadaPersistencia::getPersistencia();
           
    }
}

