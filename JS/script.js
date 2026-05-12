//contact-formがある場合に実行
const contactForm = document.getElementById('contact-form');
if (contactForm) {
    // 必要な要素をidを使って認識
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email')
    const contactTypeInput = document.getElementById('contact-type')
    const detailInput = document.getElementById('detail')
    const consentInput = document.getElementById('consent')
    //エラーメッセージ用
    const nameError = document.getElementById('name-error');
    const emailError = document.getElementById('email-error');
    const contactTypeError = document.getElementById('contact-type-error');
    const detailError = document.getElementById('detail-error');
    const consentError = document.getElementById('consent-error');

    // 送信ボタンが押されたのを認識
    contactForm.addEventListener('submit', (event) => {
        let hasEr = false;
        // 項目のチェック
        // お名前
        if (nameInput.value.trim() === "") {
            nameError.textContent = "お名前を入力してください。";
            hasEr = true;
        } else { nameError.textContent = "" }

        // メールアドレス
        if (!emailInput.value.includes("@")) {
            emailError.textContent = "メールアドレスの形式が正しくありません。";
            hasEr = true;
        } else { emailError.textContent = "" }

        // お問い合わせの種類
        if (contactTypeInput.value === "") {
            contactTypeError.textContent = "お問い合わせの種類を選択してください。";
            hasEr = true;
        } else { contactTypeError.textContent = "" }

        // お問い合わせ内容
        if (detailInput.value.trim() === "") {
            detailError.textContent = "お問い合わせ内容を入力してください。";
            hasEr = true;
        } else { detailError.textContent = "" }

        // 個人情報の取り扱いへの同意
        if (!consentInput.checked) {
            consentError.textContent = "個人情報の取り扱いへの同意が必要です。";
            hasEr = true;
        } else { consentError.textContent = "" }

        // すべて記入済みかの確認
        if (hasEr === true) {
            event.preventDefault();
        }
    });
}

//二重送信の防止
//confirm-formがある場合に実行
const confirmForm = document.getElementById('confirm-form');
if (confirmForm) {
    confirmForm.addEventListener('submit', (event) => {
        const btn = document.getElementById('send-button');
        if (btn) {
            btn.disabled = true;
            btn.textContent = "送信中…";
        }
    });
}