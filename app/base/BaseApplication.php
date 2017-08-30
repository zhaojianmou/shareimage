<?php
namespace shareimage\base;

class BaseApplication
{

    function onCreate()
    {
        init();
    }


    function init()
    {
        Log::$Debug = false;
    }

}

?>