@extends('layout')

@section('content')
    로그인 페이지
    <form action={{ route('login.process') }} method="POST">
        @csrf
        <table border="1">
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

                    @if ($errors->has('auth'))
                        <div style="color: red; font-size: 14px; margin-bottom: 10px;">
                            {{ $errors->first('auth') }}
                        </div>
                    @endif
                <td>
                    <button type="submit">로그인</button>
                </td>
            </tr>
        </table>
    </form>
    <a href="{{ route('register.index') }}">회원가입</a>
@endsection
