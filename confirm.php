<?php
// index.phpからPOSTで送られてきたデータを受け取る(name属性を使って)
$name = $_POST["name"];
$email = $_POST["email"];
$contactType = $_POST["contact-type"];
$detail = $_POST["detail"];

//htmlspecialchars()で悪意のあるプログラムを無害に(サニタイズ)する関数
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
function hn($str,)
{
    return nl2br(htmlspecialchars($str, ENT_QUOTES, 'UTF-8'));
}

// 確認表示
echo "<h2>お問い合わせ内容の確認</h2>";
echo "<p>お名前： " . h($name) . "</p>";
echo "<p>メールアドレス： " . h($email) . "</p>";
echo "<p>お問い合わせの種類： " . h($contactType) . "</p>";
echo "<p>内容： " . hn($detail) . "</p>"; ?>

<form action="thanks.php" method="POST" id="confirm-form">
    <input type="hidden" name="name" value="<?php echo h($name); ?>">
    <input type="hidden" name="email" value="<?php echo h($email); ?>">
    <input type="hidden" name="contactType" value="<?php echo h($contactType); ?>">
    <input type="hidden" name="detail" value="<?php echo hn($detail); ?>">
    <!-- 修正用の戻るボタン -->
    <button type="button " onclick="history.back()">修正する</button>
    <!-- 確定ボタン -->
    <button type="submit" id="send-button">この内容で送信する</button>
</form>