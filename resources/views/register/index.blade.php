@extends('layout')

@section('content')
    회원가입 index 페이지

    <form action={{ route('register.store') }} method="POST">
        @csrf
        <table border="1">
            <tr>
                <th>이름</th>
                <td>
                    <input type="text" name="name" value="" />
                </td>
            </tr>
            <tr>
                <th>이메일</th>
                <td>
                    <input type="text" name="email" value="" />
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
                    <button type="submit">저장</button>
                </td>
            </tr>
        </table>
    </form>
@endsection
