<?php

require_once './SplClassLoader.php';
class Configuracion
{   
    
    
    
    
    public function __construct($classLoader)
    {
        $loader = new SplClassLoader($classLoader, __DIR__);
        $loader->register();
    }
    

//$loaderBaseDatos
//$classLoaderPersistencia = new SplClassLoader('Persistencia', __DIR__);
//$classLoaderPersistencia->register();
//$classLoaderPresentacion = new SplClassLoader('Presentacion', __DIR__);
//$classLoaderPresentacion->register();
//
}

