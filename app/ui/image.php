<?php
include_once '../../vendor/autoload.php';

//echo __DIR__ . '/../../vendor/autoload.php';
use shareimage\base\HttpConstant;

echo showjson();

function showjson()
{
//    echo 123;
    $json = array("path" => (HttpConstant::IMAGE . "liu.jpeg"));
////    $value = $_GET["list"];
////    echo $value;
//    return json_encode($json);
}

