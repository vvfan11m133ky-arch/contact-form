// 必要な要素をidを使って取り出す
const contactform = document.getElementById('contact-form');
const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email')
const contact_typeInput = document.getElementById('contact_type')
const datailInput = document.getElementById('detail')
const consentInput = document.getElementById('consent')

// 送信ボタンが押されたのを認識
contactform.addEventListener('submit', function (event) {
    // 項目のチェック
    // お名前
    if (nameInput.value.trim() === "") {
        alert("お名前を入力してください。");
        event.preventDefault();
        return;
    }
    // メールアドレス
    if (!emailInput.value.includes("@")) {
        alert("メールアドレスの形式が正しくありません。");
        event.preventDefault();
        return;
    }
    // お問い合わせの種類
    if (contact_typeInput.value === "") {
        alert("お問い合わせの種類を選択してください。");
        event.preventDefault();
        return;
    }
    // お問い合わせ内容
    if (detailInput.value.trim() === "") {
        alert("お問い合わせ内容を入力してください。");
        event.preventDefault();
        return;
    }
    // 個人情報の取り扱いへの同意
    if (!consentInput.checked) {
        alert("個人情報の取り扱いへの同意が必要です。");
        event.preventDefault();
        return;
    }
})