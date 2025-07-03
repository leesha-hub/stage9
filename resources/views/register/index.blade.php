@extends('layout')

@section('pageCss')
    <link rel="stylesheet" href="{{ asset('css/register/index.css') }}">
@endsection

@section('content')
    <h2>회원가입 페이지</h2>

    <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <table border="1">
            <tr>
                <th>이름</th>
                <td>
                    <small class="hint">
                        이름은 2자 이상 20자 이하의 한글 또는 영문으로 입력해주세요.
                    </small>
                    <input type="text" name="name" value="{{ old('name') }}" />
                    @if ($errors->has('name'))
                        <div class="error">
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
                    <div class="verify-msg" id="verify-msg"></div>

                    <input type="text" id="code" name="code" placeholder="인증번호" />
                    <button type="button" onclick="verifyEmailCode()">인증 확인</button>

                    @if ($errors->has('email'))
                        <div class="error">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </td>
            </tr>

            <tr>
                <th>비밀번호</th>
                <td>
                    <small class="hint">
                        비밀번호는 8~20자 이내의 영문자, 숫자, 특수문자를 각각 1개 이상 포함해야 합니다.
                    </small>
                    <input type="password" name="password" autocomplete="new-password" />
                    @if ($errors->has('password'))
                        <div class="error">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </td>
            </tr>

            <tr>
                <th colspan="2">
                    @if ($errors->has('register'))
                        <div class="error">
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

@section('pageJs')
    <script src="{{ asset('js/register/index.js') }}" defer></script>
@endsection
