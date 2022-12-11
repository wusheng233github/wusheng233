<?php
if ($_COOKIE["lock"] == "lock") {
    header("location:./main.html");
} else {
    if ($_GET["name"] == "") {
        echo "你没有填写用户名";
    } else {
        if ($_GET["password"] == "") {
            echo "你没有填写密码";
        } else {
            $login = fopen($_GET["name"] . ".txt", "r");
            $password = fread($login, filesize($_GET["name"] . ".txt"));
            if ($_GET["password"] == $password) {
                echo "登录成功";
                setcookie("name", $_GET["name"], time() + 3600 * 24 * 365);
                setcookie("lock", "lock", time() + 3600 * 24 * 365);
            } else {
                echo "密码或用户名错误";
            }
        }
    }
}
?>