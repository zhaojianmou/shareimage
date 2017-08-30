<?php
include_once "../app/db/DBManager.php";

//echo show();
echo json() . "\n";
$str = json();
//echo $str . "\n";
echo var_dump(json_decode(json(), true));
//$json = '{"a":"hello","b":"world","c":"zhangsan","d":20,"e":170}';
//echo var_dump(json_decode($json, true));

function json()
{
    $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);

    return json_encode($arr);
}


function show()
{
    $value = $_GET["name"];
    return $value . " : " . getName();
}

function getName()
{
    $name = "";
    $dbmanager = DBManager::getInstance();
    $conn = $dbmanager->connect();
    $sql = "select username from user ";
    $result = $dbmanager->query($conn, $sql);
    if ( $result->num_rows > 0 ) {
        // 输出数据
        while ($row = $result->fetch_assoc()) {
            $name = $row["username"];
        }
    } else {
        echo "0 结果";
    }

    $conn->close();
    return $name;
}


?>