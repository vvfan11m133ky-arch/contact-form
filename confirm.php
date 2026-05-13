<?php
// index.phpからPOSTで送られてきたデータを受け取る(name属性を使って)
$name = $_POST["name"];
$email = $_POST["email"];
$contactType = $_POST["contact-type"];
$detail = $_POST["detail"];

/*htmlspecialchars()で悪意のあるプログラムを
  無害に(サニタイズ)してechoする関数*/
function eh($str)
{
    echo htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
function ehn($str,)
{
    echo nl2br(htmlspecialchars($str, ENT_QUOTES, 'UTF-8'));
} ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet href=" CSS/style.css">

    <script src="JS/script.js" defer></script>
</head>

<body>
    <header></header><!-- 後々作成 -->
    <main>
        <!-- 確認表示 -->
        <h2>お問い合わせ内容の確認</h2>
        <p>お名前： <?php eh($name) ?></p>
        <p>メールアドレス： <?php eh($email) ?></p>
        <p>お問い合わせの種類： <?php eh($contactType) ?></p>
        <p>内容： <?php ehn($detail) ?></p>

        <!-- send.phpへデータを送るための、見えないフォーム -->
        <form action="send.php" method="POST" id="confirm-form">
            <input type="hidden" name="name" value="<?php eh($name); ?>">
            <input type="hidden" name="email" value="<?php eh($email); ?>">
            <input type="hidden" name="contact-type" value="<?php eh($contactType); ?>">
            <input type="hidden" name="detail" value="<?php ehn($detail); ?>">
            <!-- 修正用の戻るボタン -->
            <button type="button" onclick="history.back()">修正する</button>
            <!-- 確定ボタン -->
            <button type="submit" id="send-button">この内容で送信する</button>
        </form>
    </main>
    <footer></footer><!-- 後々作成 -->
</body>

</html>