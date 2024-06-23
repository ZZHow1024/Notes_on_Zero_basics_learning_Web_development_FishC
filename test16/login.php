<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="ZZHow,前端,HTML5,CSS3,Web开发">
    <meta name="description" content="《零基础入门学习Web开发》案例">
    <meta name="author" content="ZZHow">
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
    <title>form、粗讲input和button元素、XAMPP</title>
</head>
<body>
    <?php
    //定义变量并设置为空值
    $username = $password = $method = "";

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $username = test_input($_GET["username"]);
        $password = test_input($_GET["password"]);
        $method = "GET";
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = test_input($_POST["username"]);
        $password = test_input($_POST["password"]);
        $method = "POST";
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data, ENT_QUOTES);
        return $data;
    }
    ?>

    <p><?php echo $username;?>，您已登陆成功！</p>
    <h1>用户信息</h1>
    <p>用户名：<?php echo $username; ?></p>
    <p>密码：<?php echo $password; ?></p>
    <p>请求方法：<?php echo $method; ?></p>
</body>
</html>
