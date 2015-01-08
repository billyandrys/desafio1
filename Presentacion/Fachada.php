<?php

namespace Presentacion;

class Fachada
{

    public function head()
    {
         echo '<!DOCTYPE html>'.
        '<html lang = "es">'.
        '<head>' .
        '<meta charset = "UTF-8">' .
        '<title>Usaurios</title>' .
        '</head>' .
        '<body>' .
        '<ul>';
    }

public function recorrer($matriz)
    {

        foreach($matriz as $key => $value){

            if (is_array($value)){
//si es un array sigo recorriendo
           
            $this->recorrer($value);
            }else{
//si es un elemento lo muestro
            echo '<il> '.$value.'</il>';
            echo '<br>';
            }

        }

    }
    public function foot()
    {
        echo '</ul>' .
        '</body>' .
        '</html>';
    }

}