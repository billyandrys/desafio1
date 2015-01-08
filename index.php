<?php
//require_once './SplClassLoader.php';
//$loaderBaseDatos = new SplClassLoader('Dominio', __DIR__);
//$loaderBaseDatos->register();
//$classLoaderPersistencia = new SplClassLoader('Persistencia', __DIR__);
//$classLoaderPersistencia->register();
//$classLoaderPresentacion = new SplClassLoader('Presentacion', __DIR__);
//$classLoaderPresentacion->register();
require_once 'Configuracion.php';

$loaderDominio      = new Configuracion('Dominio');
$loaderPersistencia = new Configuracion('Persistencia');
$loaderPresentacion = new Configuracion('Presentacion');    

use Dominio\Fachada;
use Presentacion\Fachada as View;

abstract class Index
{

    public static function main()
    {   
        $view = new View();
        $view->head();
        $view->recorrer(Fachada::getUsuarios());
        $view->foot();
    }

 }

  Index::main();
        
        
        
        
       


        







        