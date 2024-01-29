<?php
session_start();
mb_internal_encoding("utf8");

if (!empty($_SESSION["name"])) {
    $INPUT["name"] = htmlentities($_SESSION["name"], ENT_QUOTES);
    $INPUT["mail"] = htmlentities($_SESSION["mail"], ENT_QUOTES);
    $INPUT["age"] = htmlentities($_SESSION["age"], ENT_QUOTES);
    $INPUT["password"] = htmlentities($_SESSION["password"], ENT_QUOTES);
    $INPUT["comments"] = htmlentities($_SESSION["comments"], ENT_QUOTES);
} else {
    header("Location:index.php");
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
    <h1>内容確認</h1>
    <div class="confirm">
        <p>
            内容はこちらでよろしいでしょうか？<br>
            よろしければ「登録する」ボタンを押してください。
        </p>
        <p>名前<br>
            <?php echo $INPUT["name"]; ?>
        </p>
        <p>メールアドレス<br>
            <?php echo $INPUT["mail"]; ?>
        </p>
        <p>年齢<br>
            <?php echo $INPUT["age"] . "歳"; ?>
        </p>
        <p>パスワード<br>
            **********
        </p>        
        <p>コメント<br>
            <?php echo $INPUT["comments"]; ?>
        </p>
        <form action="index.php">
            <input type="submit" class="button1" value="戻って修正する">
        </form>
        <form action = "insert.php" method="POST">
            <input type="hidden" value="<?php echo $INPUT["name"]; ?>" name="name">
            <input type="hidden" value="<?php echo $INPUT["mail"]; ?>" name="mail">
            <input type="hidden" value="<?php echo $INPUT["age"]; ?>" name="age">
            <input type="hidden" value="<?php echo $INPUT["password"]; ?>" name="password">
            <input type="hidden" value="<?php echo $INPUT["comments"]; ?>" name="comments">
            <input type="submit" class="button2" value="登録する">
        </form>
</div>
</body>
</html>

