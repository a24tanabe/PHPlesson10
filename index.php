<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1 class="form_title">登録フォーム</h1>
    <form method="post" action="">
        <div class="item">
            <label>名前</label>
            <input type="text" class="text" size="35" name="name">
        </div>
        <div class="item">
            <label>ネームアドレス</label>
            <input type="text" class="text" size="35" name="mail">
        </div>
        <div class="item">
            <label>年齢</label>
            <input type="number" class="text" size="35" name="age">
        </div>
        <div class="item">
            <label>コメント</label>
            <textarea cols="35" rows="text" name="comments"></textarea>
        </div>
        <div class="item">
            <input type="submit" class="submit" value="入力内容を確認する">
        </div>
    </form>
</body>
</html>