@extends('layout')

@section('content')
    회원가입 페이지

    <form action={{ route('register.store') }} method="POST">
        @csrf
        <table border="1">
            <tr>
                <th>이름</th>
                <td>
                    <small style="display: block; color: #666; margin-bottom: 5px;">
                        이름은 2자 이상 20자 이하의 한글 또는 영문으로 입력해주세요.
                    </small>
                    <input type="text" name="name" value="{{ old('name') }}" />
                    @if ($errors->has('name'))
                        <div style="color: red; font-size: 12px; margin-top: 5px;">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <th>이메일</th>
                <td>
                    <input type="text" id="email" name="email" value="{{ old('email') }}" />
                    <button type="button" onclick="requestEmailVerification()">인증코드 받기</button>
                    <div id="verify-msg" style="color: green; font-size: 12px; margin-top: 5px;"></div>

                    <input type="text" id="code" name="code" placeholder="인증번호" required>
                    <button type="button" onclick="verifyEmailCode()">인증 확인</button>

                    @if (session('verified'))
                        <div style="color:
                            green;">{{ session('verified') }}</div>
                    @endif

                    @if ($errors->has('email'))
                        <div style="color: red; font-size: 12px; margin-top: 5px;">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <th>비밀번호</th>
                <td>
                    <small style="display: block; color: #666; margin-bottom: 5px;">
                        비밀번호는 8~20자 이내의 영문자, 숫자, 특수문자를 각각 1개 이상 포함해야 합니다.
                    </small>
                    <input type="password" name="password" value="" autocomplete="new-password" />
                    @if ($errors->has('password'))
                        <div style="color: red; font-size: 12px; margin-top: 5px;">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <th colspan="2">
                    @if ($errors->has('register'))
                        <div style="color: red; font-size: 14px; margin-bottom: 10px;">
                            {{ $errors->first('register') }}
                        </div>
                    @endif
                <td>
                    <button type="submit">저장</button>
                </td>
            </tr>
        </table>
    </form>
@endsection

<script>
    function requestEmailVerification() {
        const email = document.getElementById('email').value;
        const msgBox = document.getElementById("verify-msg");

        if (!email) {
            msgBox.innerText = "이메일을 입력해주세요.";
            return;
        }

        fetch("/email/send-code", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    email: email
                })
            })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(data => {
                        throw new Error(data.message || "인증코드 발송에 실패했습니다.");
                    });
                }
                return response.json();
            })
            .then(data => {
                msgBox.innerText = data.message || "인증코드를 발송했습니다.";
                msgBox.style.color = "green";
            })
            .catch(error => {
                msgBox.innerText = error.message;
                msgBox.style.color = "red";
            });
    }

    function verifyEmailCode() {
        const email = document.getElementById('email').value;
        const code = document.getElementById('code').value;
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
                    "Accept": "application/json",
                    "X-CSRF-TOKEN": '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    email: email,
                    code: code
                })
            })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(data => {
                        throw new Error(data.message || "인증에 실패했습니다.");
                    });
                }
                return response.json();
            })
            .then(data => {
                msgBox.innerText = data.message || "인증에 성공했습니다.";
                msgBox.style.color = "green";
            })
            .catch(error => {
                msgBox.innerText = error.message;
                msgBox.style.color = "red";
            });
    }
</script>
