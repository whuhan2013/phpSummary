<?php
//许多文件目录会创建在这个地方
define("APP_PATH","../");
//设置开发模式为"调试模式"
define("APP_DEBUG",true);

//制作一个调试输出函数
function show_bug($msg,$color='red'){
    echo "<pre style='color:".$color."'>";
    var_dump($msg);
    echo "</pre>";
}

//把css和img图片路径定义为常量，以便使用
define("SITE_URL","http://www.zj.com/");
define("CSS_URL",SITE_URL."public/home/css/"); //前台css样式路径常量
define("IMG_URL",SITE_URL."public/home/img/"); //前台图片路径常量
//后台css和图片路径
define("ADMIN_CSS_URL",SITE_URL."public/admin/css/");
define("ADMIN_IMG_URL",SITE_URL."public/admin/img/");


include "../../ThinkPHP/ThinkPHP.php";