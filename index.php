<?php

header('access-control-allow-origin:*');
//获取包含句子的文件
$path = dirname(__FILE__);
$file = file($path."/hitokoto.txt");

//获取一句句子
$arr  = mt_rand( 0, count( $file ) - 1 );
$hitokoto  = trim($file[$arr]);

//输出内容
echo $hitokoto;
?>