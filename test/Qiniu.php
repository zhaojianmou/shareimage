<?php
include_once '../vendor/autoload.php';

use Qiniu\Auth;
use Qiniu\Storage\UploadManager;
use Qiniu\Storage\BucketManager;



// 用于签名的公钥和私钥
$accessKey = 'ajsaX8NEKte1ea74hEsmeVuY7kpexRPLCPY7sqPC';
$secretKey = 'r9tkUsD2-x-vkPqkhDv3duCH7s8FPz5h5ve0Stry';

// 初始化签权对象
$auth = new Auth($accessKey, $secretKey);

// 空间名  https://developer.qiniu.io/kodo/manual/concepts
$bucket = 'http://ostcb2rtk.bkt.clouddn.com';


//初始化BucketManager
$bucketMgr = new BucketManager($auth);

//你要测试的空间， 并且这个key在你空间中存在
$bucket = 'image';
$key = 'liu.jpeg';

//*******************************  获取文件列表  ***************************************
$file = $bucketMgr->listFiles($bucket, null, null, 1000, null);

//echo $file;
//var_dump($file);
echo json_encode($file)


//*******************************  文件上传  ***************************************

// 生成上传Token
//$token = $auth->uploadToken($bucket);
//// 构建 UploadManager 对象
//$uploadMgr = new UploadManager();
//$up = "../image/kele.jpg";
//$key = 'kele.jpg';
//
//// 调用 UploadManager 的 putFile 方法进行文件的上传。
//list($ret, $err) = $uploadMgr->putFile($token, $key, $up);
//echo "\n====> putFile result: \n";
//if ($err !== null) {
//    var_dump($err);
//} else {
//    var_dump($ret);
//}


//*******************************  文件转码  ***************************************
// 转码时使用的队列名称
//$pipeline = 'abc';
//// 初始化
//$pfop = new PersistentFop($auth, $bucket, $pipeline);


?>