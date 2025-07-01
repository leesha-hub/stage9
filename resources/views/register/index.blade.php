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
                    <input type="text" name="email" value="{{ old('email') }}" />
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
