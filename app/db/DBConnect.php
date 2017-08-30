<?php
namespace shareimage\db;

use shareimage\utils\Log;
use shareimage\db\DBConstant;


class DBConnect
{
    public static $tables = array(DBConstant::TABLE_USER_CR, DBConstant::TABLE_IMAGE_CR);

    static function init()
    {
        $coon = self::connect();
//        if ( !self::isDBExist($coon) ) {
        self::createDB($coon);
        self::useDB($coon);
        foreach (self::$tables as $table) {
            self::createTable($coon, $table);
        }
//        }
        $coon->close();
    }


    static function connect()
    {
        // 创建连接
        $conn = new \mysqli(DBConstant::SERVER_NAME, DBConstant::USERNAME, DBConstant::PASSWORD);
        // 检测连接
        if ( $conn->connect_error ) {
            Log::show("连接失败: " . $conn->connect_error);
        } else {
            Log::show("连接成功");
        }
        return $conn;
    }

    static function connectDB()
    {
        // 创建连接
        $conn = self::connect();
        self::useDB($conn);
        return $conn;
    }

    static function isDBExist($conn)
    {
        $result = $conn->query(DBConstant::IS_DB_EXIST);
        if ( $result === TRUE ) {
            Log::show("数据库存在");
        } else {
            Log::show("数据库不存在");
        }
        return $result === TRUE;

    }

    static function useDB($conn)
    {
        $result = $conn->query(DBConstant::USE_DB);
        if ( $result === TRUE ) {
            Log::show("使用数据库成功");
        } else {
            Log::show("使用数据库失败");
        }
        return $result;
    }

    static function createDB($conn)
    {
        $result = $conn->query(DBConstant::CREATE_DB);
        if ( $result === TRUE ) {
            Log::show("创建数据库成功");
        } else {
            Log::show("创建数据库失败");
        }
        return $result;
    }

    static function createTable($conn, $table)
    {
        $result = $conn->query($table);
        if ( $result === TRUE ) {
            Log::show("创建数据表成功");
        } else {
            Log::show("创建数据表失败");
        }
        return $result;
    }
}


?>