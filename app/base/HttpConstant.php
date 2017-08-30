<?php
namespace shareimage\base;


final class HttpConstant
{
    //***************************** 网络请求 *****************************

    //***************************** 根目录 *****************************
    const HTTP = "http://xayuetu.cn/";
    const HTTP_ROOT = HTTP . "shareimage/";

    const UI = HTTP_ROOT . "app/ui/";
    const IMAGE = HTTP_ROOT . "image/";

    const QINIU_ROOT = HTTP_ROOT . "http://ostcb2rtk.bkt.clouddn.com/";


    //***************************** 页面 *****************************
    const UI_INDEX = UI . "index.php";
    const UI_IMAGE = UI . "image.php";


}

?>