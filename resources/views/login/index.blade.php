@extends('layout')

@section('content')
    로그인 index 페이지
    <form action={{ route('login.process') }} method="POST">
        @csrf
        <table border="1">
            <tr>
                <th>이메일</th>
                <td>
                    <input type="text" name="email" value="{{ old('email') }}" />
                </td>
            </tr>
            <tr>
                <th>비밀번호</th>
                <td>
                    <input type="text" name="password" value="" />
                </td>
            </tr>
            <tr>
                <th colspan="2">
                <td>
                    <button type="submit">로그인</button>
                </td>
            </tr>
        </table>
    </form>
    <a href="{{ route('register.index') }}">회원가입</a>
@endsection
