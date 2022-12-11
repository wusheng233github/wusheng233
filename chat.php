<?php
$chat=fopen("chat.txt","a+") or die("错误");
fwrite($chat,"<br>" . $_COOKIE["name"] .  ":" . $_GET["words"]) or die("错误");
fclose($chat);
$myfile = fopen("chat.txt", "r") or die("无聊天");
echo fread($myfile,filesize("chat.txt"));
fclose($myfile);
?>