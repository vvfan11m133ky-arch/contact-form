<?php
/*htmlspecialchars()で悪意のあるプログラムを
  無害に(サニタイズ)する関数*/
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
function nh($str,)
{
    return nl2br(htmlspecialchars($str, ENT_QUOTES, 'UTF-8'));
}

// index.phpからPOSTで送られてきたデータを受け取る(name属性を使って)
$name = h(trim($_POST["name"] ?? ""));
$email = h(trim($_POST["email"] ?? ""));
$contactType = h($_POST["contact-type"] ?? "");
$detail = nh(trim($_POST["detail"] ?? ""));
$consent = h($_POST["consent"] ?? "");

//バリデーション
$errors = [];
if (empty($name)) {
    $errors[] = "お名前を入力してください。";
}
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "メールアドレスを正しく入力してください。";
}
if (empty($contactType)) {
    $errors[] = "お問い合わせの種類を入力してください。";
}
if (empty($detail)) {
    $errors[] = "お問い合わせ内容を入力してください。";
}
if (empty($consent)) {
    $errors[] = "個人情報の取り扱いに同意してください。";
}

if (!empty($errors)) {
    echo "<h2>入力内容に不備があります。</h2>";
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
    echo '<button type="button" onclick="history.back()">戻る</button>';
    exit;
}
?>
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
        <p>お名前： <?php echo $name ?></p>
        <p>メールアドレス： <?php echo $email ?></p>
        <p>お問い合わせの種類： <?php echo $contactType ?></p>
        <p>内容： <?php echo $detail ?></p>

        <!-- send.phpへデータを送るための、見えないフォーム -->
        <form action="send.php" method="POST" id="confirm-form">
            <input type="hidden" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="contact-type" value="<?php echo $contactType; ?>">
            <input type="hidden" name="detail" value="<?php echo $detail; ?>">
            <!-- 修正用の戻るボタン -->
            <button type="button" onclick="history.back()">修正する</button>
            <!-- 確定ボタン -->
            <button type="submit" id="send-button">この内容で送信する</button>
        </form>
    </main>
    <footer></footer><!-- 後々作成 -->
</body>

</html>