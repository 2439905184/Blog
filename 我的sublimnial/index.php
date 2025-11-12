<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>我的潜意识</title>
</head>
<body>
    <p>被圆神充能然后撑满宇宙之梦，可能存在听了导致膝盖酸的问题</p>
    <p>宇宙母神分类听的顺序</p>
    <ol>
        <li>宇宙母神终极版（本体论）</li>
        <li>「宇宙守护者：净化与重生之母神」（职责论）</li>
        <li>「生命之源：创世母神的温柔仪式」(创造论）</li>
    </ol>
<?php
    // 递归函数显示目录和文件
    function listDirectory($dir, $baseDir = '') {
        $files = scandir($dir);
        
        echo "<ol>";
        foreach ($files as $file) {
            if ($file == '.' || $file == '..') {
                continue;
            }
            
            $path = $dir . '/' . $file;
            // 计算相对于初始目录的路径
            $relativePath = $baseDir ? $baseDir . '/' . $file : $file;
            
            if (is_dir($path)) {
                echo "<li><strong>$file</strong>";
                // 递归调用显示子目录
                listDirectory($path, $relativePath);
                echo "</li>";
            } else {
                echo "<li><a href='$relativePath'>$file</a></li>";
            }
        }
        echo "</ol>";
    }

    echo "<h2>文件列表</h2>";
    listDirectory(__DIR__);
?>
</body>
</html>