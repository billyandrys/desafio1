<?php
namespace Persistencia;
use Persistencia\BaseDeDatos;
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
        
        try{
            $bd = new BaseDeDatos(new Mysql());
            $sql = new Sql();
            $sql->addTable('usuarios');
            $usuario[] = $bd->ejecutar($sql);
            return $usuario;
        }catch (Exception $e){    
            
            return $e->getMessage();
            
          }
    }
    
   
    
    
    
}

