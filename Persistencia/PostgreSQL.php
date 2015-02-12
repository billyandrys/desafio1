<?php
namespace Persistencia;

use \ManejadorBaseDeDatosInterface;
use Tool\Configuracion as Config;

class PostgreSQL implements ManejadorBaseDeDatosInterface
{

    
    /**
     *
     * @var resource puntero a la conexion real
     */
    private $_conexion;

    public function conectar()
    {
        $this->_conexion = pg_connect(
                "host=" . Config::SERVIDOR
                . " port=5432 dbname=" . Config::BASE
                . " user=" . Config::USUARIO
                . " password=" . Config::CLAVE
        );
    }

    public function desconectar()
    {
        pg_close($this->_conexion);
    }

    /**
     *
     * @param Sql $sql
     * @return array
     */
    public function traerDatos(Sql $sql)
    {
        $resultado = pg_query($this->_conexion, $sql);

        while ($fila = pg_fetch_array($resultado, PGSQL_ASSOC)) {
            $todo[] = $fila;
        }
        return $todo;
    }

}