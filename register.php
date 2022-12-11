<?php
$register=fopen($_GET["name"] . ".txt","x") or die("您未填写完整或账号已存在");
fwrite($register, $_GET["password"]) or die("您未填写完整或账号已存在");
echo "已注册 " . $_GET["name"] . " 这个账户，";
echo "密码为 " . $_GET["password"] . " ，请牢记";
fclose($register);
?>