<?php
namespace Presentacion\Html;

abstract class Ui
{   
   
    public static function getTagOpen()
    {
        return '<ul>';
    }
    
    public static function getTagClose()
    {
        return '</ul>';
    }
    
}