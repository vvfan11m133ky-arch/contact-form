<?php
// index.phpからPOSTで送られてきたデータを受け取る(name属性を使って)
$name = $_POST["name"];
$email = $_POST["email"];
$contactType = $_POST["contact-type"];
$detail = $_POST["detail"];

// 確認用
//htmlspecialchars()で悪意のあるプログラムを無害に(サニタイズ)
echo "<h2>お問い合わせ内容の確認</h2>";
echo "<p>お名前： " . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . "</p>";
echo "<p>メールアドレス： " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "</p>";
echo "<p>お問い合わせの種類： " . htmlspecialchars($contactType, ENT_QUOTES, 'UTF-8') . "</p>";
echo "<p>内容： " . nl2br(htmlspecialchars($detail, ENT_QUOTES, 'UTF-8')) . "</p>"; ?>

<!-- 修正用の戻るボタン -->
<button onclick="history.back()">修正する</button>