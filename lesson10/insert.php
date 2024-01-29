<?php
mb_internal_encoding("utf8");
session_start();

// パスワードのハッシュ化
$password = password_hash($_POST["password"],PASSWORD_DEFAULT);

try {
    $pdo = new PDO("mysql:dbname=php_practice;hpst=localhost;","root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("INSERT INTO user (name,mail,age,password,comments) values(?,?,?,?,?) ");
    $stmt->execute(array($_POST["name"],$_POST["mail"],$_POST["age"],$password,$_POST["comments"]));
} catch(PDOException $e) {
    echo mb_convert_encoding($e->getMessage(),'utf-8','sjis');
}

$pdo = null;

$_SESSION = array();

if (isset($_COOKIE["session_name()"])){
    setcookie("session_name()","",time()-1800,"/");
}

session_destroy();

?>

<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>フォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
    <h1>登録完了</h1>
    <div class="confirm">
        <p>登録ありがとうございました。</p>
        <form action="index.php">
            <input type="submit" class="button1" value="TOPに戻る">
        </form>
    </div>
</body>
</html>