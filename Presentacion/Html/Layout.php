<?php
namespace Presentacion\Html;

abstract class  Layout
{
        
    public static function getHead()
    {
        return '<!DOCTYPE html>'.
        '<html lang = "es">'.
        '<head>' .
        '<meta charset = "UTF-8">' .
        '<title>Usaurios</title>' .
        '</head>' .
        '<body>'.
            '<header>'.
            '<h1>Lista de usuarios.</h1>'.
            '</header>';
    }
    
    public static function getFooter()
    {
        return '</body>';
    }
        
}
