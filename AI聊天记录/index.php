<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI聊天记录</title>
</head>
<body>
    <h2>deepseek</h2>
    <ol>
        <?php
            $dir = __DIR__;
            $chatDir = $dir . DIRECTORY_SEPARATOR . "deepseek聊天记录";
            $items = scandir($chatDir);
            $folders = [];

            if ($items !== false) {
                foreach ($items as $item) {
                    $fullPath = $chatDir . DIRECTORY_SEPARATOR . $item;

                    // 忽略 . 和 .. 两个特殊目录
                    if ($item === '.' || $item === '..') {
                        continue;
                    }

                    // 仅处理文件（非目录）
                    if (is_file($fullPath) && $item != 'index.php') {
                        // 这里将文件名作为超链接，假设文件是 HTML 文件
                        echo "<li><a href='" . htmlspecialchars("deepseek聊天记录" . DIRECTORY_SEPARATOR . $item) . "'>" . htmlspecialchars($item) . "</a></li>";
                    }
                }
            } else {
                echo "<li>无法读取目录</li>";
            }
        ?>
    </ol>
</body>
</html>
