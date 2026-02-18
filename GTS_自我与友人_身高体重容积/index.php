<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GTS_自我与友人_身高体重容积</title>
</head>
<body>
    <img src="../img/youji.png" alt="忧姬">
    <p>忧姬是Noesis里的一个角色，体弱多病，但她教会我：释然的微笑，比健康更珍贵。
这里是我存放那种微笑的地方。</p>
    <h2>向观世音菩萨祈愿文-改编</h2>
    <ol>
        <li><a href="../data/向观世音菩萨祈愿文[星云法师.txt">向观世音菩萨祈愿文[星云法师.txt</a></li>
        <li><a href="../data/向观世音菩萨祈愿文[星云法师-自我修改版.txt">向观世音菩萨祈愿文[星云法师-自我修改版.txt</a></li>
    </ol>
    <a target="_blank" href="心智身高体重容量计算器.html">心智身高体重容量计算器1</a>
    <a target="_blank" href="心智身高体重容量计算器-作品数量版.html">心智身高体重容量计算器2</a>
    <a target="_blank" href="https://www.cnblogs.com/1288blog/p/19622994">gts growth.nim娱乐程序</a>
    <ol>
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
        listDirectory(__DIR__);
    ?>
    </ol>
</body>
</html>
