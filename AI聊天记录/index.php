<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI聊天记录</title>
</head>
<body>
    <ol>
        <?php
            // 递归函数显示目录和文件
    function listDirectory($dir, $baseDir = '') {
        $files = scandir($dir);
        
        echo "<ol>";
        foreach ($files as $file) {
            if ($file == '.' || $file == '..' || $file == 'index.php') {
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
    </ol>
</body>
</html>
