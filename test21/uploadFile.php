<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="ZZHow,前端,HTML5,CSS3,Web开发">
    <meta name="description" content="《零基础入门学习Web开发》案例">
    <meta name="author" content="ZZHow">
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
    <title>input元素之上传文件属性</title>
</head>
<body>
    <?php
        $uploadPath = "/var/www/html/upload/";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_FILES["file"]["error"] > 0) {
                echo "错误：" . $_FILES["file"]["error"] . "<br>";
                switch ($_FILES["file"]["error"]) {
                    case 1: echo "上传的文件过大";break;
                    case 2: echo "上传的文件过大（不能超过 1 KB）";break;
                    case 3: echo "文件只有部分被上传";break;
                    case 4: echo "没有文件被上传";break;
                    case 5: echo "找不到临时文件夹";break;
                    case 6: echo "文件写入失败";break;
                }
            } else {
                echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
                echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
                echo "文件大小: " . ($_FILES["file"]["size"]) / 1024 . " KB<br>";
                echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"] . "<br>";
                //获取 upload 文件夹中的所有文件
                $rmFiles = glob($uploadPath . "*");
                foreach ($rmFiles as $file) {
                    if(is_file($file)) {
                        unlink($file);
                    }
                }
                echo "上次上传的文件已删除" . "<br>";
                if (file_exists($uploadPath . $_FILES["file"]["name"])) {
                    echo $_FILES["file"]["name"] . "文件已存在";
                } else {
                    if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploadPath . $_FILES["file"]["name"])) {
                        $filePath = "../upload/" . $_FILES["file"]["name"];
                        echo "文件已保存到" . $uploadPath . $_FILES["file"]["name"] . "<br>";
                        echo "<a href=$filePath>点击查看</a>";
                    } else {
                        echo "文件上传失败";
                    }
                }
            }
        }
    ?>
</body>
</html>
