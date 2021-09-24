<?php
// ファイルを開く
$openFile = fopen('date/date.txt', 'r');
// ファイル内容を1行ずつ読み込んで出力
while($str = fgets($openFile)){
    echo nl2br($str);
}
// ファイルを閉じる
fclose($openFile);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style type="text/css">
    ul{
        list-style: none;
    }
    </style>
</head>
<body>
<ul>
        <li><a href="index.php">トップページに戻る</a></li>
        </ul>
    
</body>
</html>