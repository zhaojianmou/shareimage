<?php
namespace shareimage\db;

use shareimage\utils\Log;


class DBManager
{
    //静态变量保存全局实例
    private static $_instance = null;

    public $curd = null;

    //私有构造函数，防止外界实例化对象
    private function __construct()
    {
        $this->curd = new DBCurd ();
    }


    //静态方法，单例统一访问入口
    static public function getInstance()
    {
        if ( is_null(self::$_instance) || isset (self::$_instance) ) {
            self::$_instance = new self ();
        }
        return self::$_instance;
    }

    function initDB()
    {
        Log::$Debug = false;
        DBConnect::init();
    }

    function connect()
    {
        return DBConnect::connectDB();
    }

    function insert($insert)
    {
        $conn = $this->connect();
        $this->curd->insertData($conn, $insert);
        $conn->close();
    }

    function update($update)
    {
        $conn = $this->connect();
        $this->curd->updateData($conn, $update);
        $conn->close();
    }

    function delete($delete)
    {
        $conn = $this->connect();
        $this->curd->deleteData($conn, $delete);
        $conn->close();
    }

    public function query($conn, $query)
    {
        $result = $this->curd->queryData1($conn, $query);
        return $result;
    }


}


?>