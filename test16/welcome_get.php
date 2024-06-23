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
    $name = $email = "";

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $name = test_input($_GET["name"]);
        $email = test_input($_GET["email"]);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data, ENT_QUOTES);
        return $data;
    }
    ?>

    <p><?php echo $name;?>，您的表单已提交</p>
    <h1>表单信息</h1>
    <p>姓名：<?php echo $name; ?></p>
    <p>邮箱：<?php echo $email; ?></p>
</body>
</html>
