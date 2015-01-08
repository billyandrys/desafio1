<?php
namespace Persistencia;

use Persistencia\ManejadorBaseDeDatosInterface;
//require_once 'ManejadorBaseDeDatosInterface.php';

/**
 * Clase MySQL
 *
 * A modo de ejemplo los parametros estan definidos
 * como constantes, pero en la "vida real" podrian
 * estar en un archivo de configuracion aparte.
 */
class MySQL implements ManejadorBaseDeDatosInterface
{

    const USUARIO = 'root';
    const CLAVE = '';
    const BASE = 'surforce';
    const SERVIDOR = 'localhost';

    /**
     *
     * @var resource puntero a la conexion real
     */
    private $_conexion;

    public function conectar()
    {
        $this->_conexion = mysql_connect(
                self::SERVIDOR, self::USUARIO, self::CLAVE
        );

        mysql_select_db(
                self::BASE, $this->_conexion
        );
    }

    public function desconectar()
    {
        mysql_close($this->_conexion);
    }

    /**
     *
     * @param Sql $sql
     * @return array
     */
    public function traerDatos(Sql $sql)
    {
        try{
                $resultado = mysql_query($sql, $this->_conexion);
                if($resultado == False )
                {
                    throw new Exception('Error en la base de datos');
                }else{
                            while ($fila = mysql_fetch_array($resultado, MYSQL_ASSOC)) {
                            $todo[] = $fila;
                            }
                        return $todo;
                     }   
                }catch(Exception $e){
                
                    $e->getMessage();
            }
        

        
    }

}