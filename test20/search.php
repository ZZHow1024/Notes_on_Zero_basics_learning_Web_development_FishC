<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $search = $_POST["search"];
        redirect("https://www.baidu.com/s?wd=" . $search);
    }

    function redirect($url) {
        header("Location: $url");
        exit();
    }
?>
