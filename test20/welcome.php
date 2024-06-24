<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="ZZHow,前端,HTML5,CSS3,Web开发">
    <meta name="description" content="《零基础入门学习Web开发》案例">
    <meta name="author" content="ZZHow">
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
    <title>input元素之搜索框、颜色选择框、图像按钮、隐藏属性</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $color = $_GET["color"];
            $x = $_GET["x"];
            $y = $_GET["y"];
            $hidden = $_GET["hidden"];
            echo "后端已收到您选择的颜色：" . $color . "<br>". "按钮被单击的 X 坐标：" . $x . "，Y 坐标：" . $y . "<br>" . "隐藏的内容：" . $hidden;
        }
    ?>
</body>
</html>