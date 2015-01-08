<?php
namespace Persistencia;
use \Sql;

interface ManejadorBaseDeDatosInterface
{

    public function conectar();

    public function desconectar();

    /**
     * La firma tiene definido el parametro y el tipo
     * que deberan cumplir todas las clases
     * que implementen esta interfaz
     */
    public function traerDatos(Sql $sql);
}