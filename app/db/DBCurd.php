<?php
namespace shareimage\db;

use shareimage\utils\Log;

class DBCurd
{

    function insertData($conn, $insert)
    {
        $result = $conn->query($insert);
        if ( $result === TRUE ) {
            Log::show("插入数据库成功");
        } else {
            Log::show("插入数据库失败");
        }
        return $result === TRUE;
    }

    function updateData($conn, $update)
    {
        $result = $conn->query($update);
        if ( $result === TRUE ) {
            Log::show("更新数据库成功");
        } else {
            Log::show("更新数据库失败");
        }
        return $result === TRUE;
    }

    function deleteData($conn, $delete)
    {
        $result = $conn->query($delete);
        if ( $result === TRUE ) {
            Log::show("删除数据库成功");
        } else {
            Log::show("删除数据库失败");
        }
        return $result === TRUE;
    }

    function queryData1($conn, $query)
    {
        $result = $conn->query($query);
        return $result;
    }

    function queryData2($conn, $fields, $table, $where)
    {
        $query = "select " . $fields . " from " . $table . " " . $where;

        return queryData1($conn, $query);
    }

}


?>