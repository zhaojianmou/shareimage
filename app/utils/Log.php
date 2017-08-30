<?php
namespace shareimage\utils;

class Log
{
    public static $Debug = false;


    public static function show($msg)
    {
        if ( !self::$Debug ) {
            echo $msg . "\n";
        }
    }


}

?>