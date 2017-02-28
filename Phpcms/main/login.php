<?php

    session_start();
    if(isset($_SESSION["is_login"])){
        $message="已登录";
        $url="main.php";
        include "message.html";
        exit;
    }

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <style>
        *{
            margin:0;
        }
        .box{
            height:190px;
            width:280px;
            padding-top:10px;
            border:1px solid #000;
            margin:auto;
            position:fixed;
            left:0;top:0;right:0;bottom:100px;
            line-height:35px;
            text-align:center;
        }
        h3{
            text-align:center;
            height:40px;
            line-height:30px;
        }
    </style>
</head>
<body>
<form action="checkLogin.php" method="post">
    <div class="box">
        <h3>登录页</h3>
        用户名：<input type="text" value="" name="username"/><br/>
        密　码：<input type="password" value="" name="password"/><br/>
        <input type="submit" value="登录"/><br/>
        没有用户名，请<a href="reg.php">点击注册</a>
    </div>
</form>
</body>
</html>