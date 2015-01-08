<?php
namespace Persistencia;
/**
 * BaseDeDatos
 *
 */


use Persistencia\ManejadorBaseDeDatosInterface;
use Persistencia\Sql;
class BaseDeDatos 
{

    /**
     *
     * @var ManejadorBaseDeDatos
     */
    private $_manejador;

    /**
     *
     * @param ManejadorBaseDeDatos $manejador
     */
    public function __construct(ManejadorBaseDeDatosInterface $manejador)
    {
        $this->_manejador = $manejador;
    }

    /**
     * Obtiene un objeto de tipo Sql y posteriormente
     * retorna un array con los datos obtenidos
     *
     * @param Sql $sql
     * @return array datos obtenidos
     */
    public function ejecutar(Sql $sql)
    {
        $this->_manejador->conectar();

        $datos = $this->_manejador->traerDatos($sql);

        $this->_manejador->desconectar();

        return $datos;
    }

}