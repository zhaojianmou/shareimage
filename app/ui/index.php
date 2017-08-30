<?php
include_once '../../vendor/autoload.php';
//require_once __DIR__ . '/../../vendor/autoload.php';
use shareimage\db\DBManager;

echo './../../vendor/autoload.php';

//\shareimage\db\DBManager::getInstance()->initDB();

init();

function init()
{
    DBManager::getInstance()->initDB();
}
