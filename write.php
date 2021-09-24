<?php


// ファイルに書き込み
$name = $_POST['name'];
$birthPlace = $_POST['birthPlace'];
$email = $_POST['email'];
$pass = $_POST['pass'];

//文字作成
$str = $name . '/' . $birthPlace . '/' . $email  . '/' . $pass . "\n";

$file = fopen('./date/date.txt', 'a' );  //ファイルOPEN 
fwrite( $file , $str  ); //書込みです 
fclose( $file );

?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>

<style type="text/css">
ul{
    list-style: none;
}
</style>



</head>

<body>

    <h1>write OK!</h1>
    <h2>check it !</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
