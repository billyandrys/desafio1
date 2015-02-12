<?php

namespace Presentacion;

use Presentacion\Html\Ui;
use Presentacion\Html\Li;
use Presentacion\Html\Layout as Layout;
use Dominio\Fachada as Dominio;

abstract class Fachada
{

    public static function runList(array $list)
    {
        
        $result = Ui::getTagOpen();
        
        foreach ($list as $items){
          
            $result .= Li::getOpen() . $items. Li::getClosure();
           
            }
        $result.= Ui::getTagClose();
        return $result;
    }

    public static function allUser()
    {
        $result = Layout::getHead();
        try {
            $user = Dominio::getUsuarios();
            $result .= self::runList($user);
        } catch (Exception $e) {

            $result .= 'Error al intetar mostrar el listado de usuarios';

            Tool ::errorLog($result);
        }

        $result .= Layout::getFooter();

        echo $result;
    }

}