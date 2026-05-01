<!DOCTYPE html>
<html lang=ja>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <header></header><!-- 後々作成 -->
    <main>
        <form action="confirm.php" method="post">
            <h2>お問い合わせ</h2>
            <p>下記項目を入力してください</p>
            <label for="name">お名前</label>
            <input type="text" id="name" name="name" placeholder="姓もしくは会社名">
            <label for="email">メールアドレス</label>
            <input type="email" id="email" name="email" placeholder="example@ex.co.jp" required>
            <label for="contact-type">お問い合わせの種類</label>
            <select id="contact-type" name="contact-type" required>
                <option value="">--選択してください--</option>
                <option value="production">制作のご依頼</option>
                <option value="recruit">採用について</option>
                <option value="other">その他</option>
            </select>
            <label><input type="checkbox" id="consent" name="consent" value="agree" required>個人情報の取り扱いへの同意</label>
            <label><input type="submit" id="submit" name="submit" value=""></label>
        </form>
    </main>
    <footer></footer><!-- 後々作成 -->
</body>

</html>