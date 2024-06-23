<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="ZZHow,前端,HTML5,CSS3,Web开发">
    <meta name="description" content="《零基础入门学习Web开发》案例">
    <meta name="author" content="ZZHow">
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
    <title>autocomplete、targe、value、autofocus、disabled和readonly属性</title>
</head>
<body>
    <?php
    //定义变量并设置为空值
    $method = "";

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $method = "GET";
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $method = "POST";
    }
    ?>

    <p>已收到您的表单</p>
    <h1>用户信息</h1>
    <p>请求方法：<?php echo $method; ?></p>
</body>
</html>
