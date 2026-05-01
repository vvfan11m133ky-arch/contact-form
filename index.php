<!DOCTYPE html>
<html lang=ja>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <header></header><!-- 後々作成 -->
    <main>
        <form id="contact-form" action="confirm.php" method="post">
            <h2>お問い合わせ</h2>
            <p>下記項目を入力してください</p>

            <p><label for="name">お名前<br>
                    <input type="text" id="name" name="name" placeholder="姓もしくは会社名">
                </label>
            </p>

            <p><label for="email">メールアドレス<br>
                    <input type="email" id="email" name="email" placeholder="example@ex.co.jp">
                </label>
            </p>

            <p><label for="contact_type">お問い合わせの種類<br>
                    <select id="contact_type" name="contact-type">
                        <option value="">--選択してください--</option>
                        <option value="production">制作のご依頼</option>
                        <option value="recruit">採用について</option>
                        <option value="other">その他</option>
                    </select>
                </label>
            </p>

            <p><label for="detail">お問い合わせ内容<br>
                    <textarea id="detail" name="detail" value="a"></textarea>
                </label>
            </p>

            <p><label><input type="checkbox" id="consent" name="consent" value="agree">個人情報の取り扱いへの同意</label></p>

            <button type="submit" id="submit_button">送信する</button>
        </form>
    </main>
    <footer></footer><!-- 後々作成 -->
    <script src="JS/script.js"></script>
</body>

</html>