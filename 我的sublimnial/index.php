<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>我的潜意识</title>
</head>
<body>
<?php
    // 获取当前目录文件列表
    $files = scandir(__DIR__);
    
    // 先显示当前目录的文件
    echo "<h2>当前目录</h2>";
    echo "<ol>";
    foreach ($files as $file) {
        if ($file == '.' || $file == '..') {
            continue;
        }
        if (!is_dir($file)) {
            echo "<li><a href='$file'>$file</a></li>";
        }
    }
    echo "</ol>";
    
    // 再显示子目录的文件
    foreach ($files as $file) {
        if ($file == '.' || $file == '..') {
            continue;
        }
        if (is_dir($file)) {
            echo "<h2>$file</h2>";
            $subFiles = scandir($file);
            echo "<ol>";
            foreach ($subFiles as $subFile) {
                if ($subFile == '.' || $subFile == '..') {
                    continue;
                }
                echo "<li><a href='$file/$subFile'>$subFile</a></li>";
            }
            echo "</ol>";
        }
    }
?>
</body>
</html>