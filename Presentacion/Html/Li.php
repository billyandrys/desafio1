<?php
namespace Presentacion\Html;

abstract class Li
{
      
    public static function getOpen()
    {
        return '<li>';
    }
    
    public static function getClosure()
    {
        return '</li>';
    }
}
