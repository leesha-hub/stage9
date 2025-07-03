@extends('layout')

@section('pageCss')
    <link rel="stylesheet" href="{{ asset('css/login/index.css') }}">
@endsection

@section('content')
    <h2>로그인 페이지</h2>

    <form action="{{ route('login.process') }}" method="POST">
        @csrf
        <table border="1">
            <tr>
                <th>이메일</th>
                <td>
                    <input type="text" name="email" value="{{ old('email') }}" />
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
                    @if ($errors->has('auth'))
                        <div class="authError">
                            {{ $errors->first('auth') }}
                        </div>
                    @endif

                <td colspan="2">
                    <button type="submit">로그인</button>
                </td>
            </tr>
        </table>
    </form>

    <a href="{{ route('register.index') }}">회원가입</a>
@endsection
