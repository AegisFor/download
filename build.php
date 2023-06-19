<?php
//设置连接根
$url = "";
//获取反射信息
$update = json_decode(file_get_contents('php://input'), true);
$chat_id = $update['message']['chat']['id'];
$name = $update['message']['from']['first_name'];
//发送给用户
file_get_contents($url . "sendmessage?text=你好，世界" . $name ."&chat_id=" . $chat_id);
?>
