<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 페이지</title>

    {{-- 페이지별 CSS --}}
    @yield('pageCss')
</head>

<body>
    @yield('content')

    {{-- 페이지별 JS --}}
    @yield('pageJs')
</body>

</html>
