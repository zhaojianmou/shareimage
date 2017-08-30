<?php

include_once "../app/db/DBManager.php";

use shareimage\db\DBConstant;


echo showjson();

function showJson()
{
    $type = $_GET["type"];
    $name = $_GET["name"];
    $path = $_GET["path"];
    $date = $_GET["date"];
    switch ($type) {
        case DBConstant::INSERT;
            insertImage($name, $path, $date);
            break;
        case DBConstant::UPDATE;

            break;
        case DBConstant::DELETE;
            deleteImage($name);
            break;

    }


}

function insertImage($name, $path, $date)
{

}

function updateImage($name, $path, $date)
{

}

function deleteImage($name)
{


}










