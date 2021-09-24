<html>

<head>
    <meta charset="utf-8">
    <title>課題テンプレート</title>

    <style type="text/css">
    *{margin:0;padding: 0;list-style: none;text-align: center;}
    body{
        width: 600px;
        margin: 0 auto;
        padding: 20px 0 100px 0;
        background: #f1f1f2 ;
        min-height: 100vh;
    }
    li{
        position: relative;
        padding: 10px 20px;
        margin: 0 8px 8px 8px;
        background-color: #fff;
        border-radius: 5px;
    }

    form{
        margin-left: 40px auto;
        margin-right: 40px auto;
    }

input{
    font-size: 20px;
}


    </style>


</head>

<body>
    <ul>
    <form action="write.php" action="" method="post">
        <li><label for="name">お名前：</label>
        <input type="text" name="name" placeholder="山本　太郎" ></li>
        <li><label for="birth">ご出身：</label>
        <input type="text" name="birthPlace" placeholder="佐賀の山奥" ></li>
        <li><label for="email">メール：</label>
        <input type="email" name="email" placeholder="ex)sa@mail.jp"></li>
        
        <input type="submit" value="送信">
    </form>
    </ul>
</body>

</html>