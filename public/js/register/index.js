function requestEmailVerification() {
    const email = document.getElementById("email").value;
    const msgBox = document.getElementById("verify-msg");

    if (!email) {
        msgBox.innerText = "이메일을 입력해주세요.";
        msgBox.style.color = "red";
        return;
    }

    fetch("/email/send-code", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document.querySelector('input[name="_token"]')
                .value,
        },
        body: JSON.stringify({ email }),
    })
        .then((response) => response.json())
        .then((data) => {
            msgBox.innerText = data.message || "인증코드를 발송했습니다.";
            msgBox.style.color = "green";
        })
        .catch((error) => {
            msgBox.innerText = error.message || "인증코드 발송에 실패했습니다.";
            msgBox.style.color = "red";
        });
}

function verifyEmailCode() {
    const email = document.getElementById("email").value;
    const code = document.getElementById("code").value;
    const msgBox = document.getElementById("verify-msg");

    if (!email || !code) {
        msgBox.innerText = "이메일과 인증번호를 모두 입력해주세요.";
        msgBox.style.color = "red";
        return;
    }

    fetch("/email/verify-code", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            Accept: "application/json",
            "X-CSRF-TOKEN": document.querySelector('input[name="_token"]')
                .value,
        },
        body: JSON.stringify({ email, code }),
    })
        .then((response) => response.json())
        .then((data) => {
            msgBox.innerText = data.message || "인증에 성공했습니다.";
            msgBox.style.color = "green";
        })
        .catch((error) => {
            msgBox.innerText = error.message || "인증에 실패했습니다.";
            msgBox.style.color = "red";
        });
}
