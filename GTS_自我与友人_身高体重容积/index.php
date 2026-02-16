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
    <ol>
    <?php
         $dir = __DIR__;
         $items = scandir($dir);
         $folders = [];
         foreach ($items as $item) {
             $fullPath = $dir . DIRECTORY_SEPARATOR . $item;
             if(is_file($fullPath) && $item != 'index.php')
             {
                 echo "<li><a target='_blank' href=" .$item . ">" .$item . "</a></li>";
             }
         }
    ?>
    </ol>
</body>
</html>
