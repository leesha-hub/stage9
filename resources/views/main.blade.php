@extends('layout')

@section('content')
    <h2>메인</h2>

    @if (Auth::check())
        <p>{{ Auth::user()->name }}님 환영합니다!</p>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">로그아웃</button>
        </form>
    @else
        <a href="{{ route('login.index') }}">로그인</a>
    @endif
@endsection
