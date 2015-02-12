<?php
namespace Persistencia;
use Tool\Configuracion as Config;
use Persistencia\ManejadorBaseDeDatosInterface;

class MySQL implements ManejadorBaseDeDatosInterface
{
    
    
 
    private $_conexion;

    public function conectar()
    {
        
        $this->_conexion = mysql_connect(
        Config::SERVIDOR,
        Config::USUARIO,
        Config::CLAVE
        );
        if (!$this->_conexion) {
            throw new \Exception('ERROR DE CONEXION');
        }
        $db_selected = mysql_select_db(
            Config::BASE,
            $this->_conexion
        );
        if (!$db_selected) {
            throw new \Exception('ERRO, NO SE PUEDO ACEDER A LOS DATOS' );
        }
    }
    
    public function desconectar()
    {
        mysql_close($this->_conexion);
    }
    
    public function traerDatos(Sql $sql)
    {        
        $resultado = mysql_query($sql, $this->_conexion);
        if (!$resultado) {
            throw new \Exception('CONSULTA INVALIDA');
        }

        while ($fila = mysql_fetch_array($resultado, MYSQL_ASSOC)){
            $todo[] = $fila;
        }
        return $todo;
    }
    
    public function insertarDatos(Sql $sql)
    {
        $resultado = mysql_query($sql->getInsert(), $this->_conexion);
    }
}