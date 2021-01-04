<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/article.css') }}">
    <link rel="stylesheet" href="{{ asset('css/post.css') }}">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        @component('components.header')
        @endcomponent
    </nav>
    <main>
        <div class="container">
            <!-- 画面の大きさなどは共通なのでcontainer -->
            <div class="contents_wrapper">
                <!-- contents_containerの中に各自でコードを書いていく -->
                <!-- contentsフォルダにそれぞれ書いたコードを管理する -->
                @yield('contents')
            </div>
        </div>
        <div class="container">
            @yield('content')
        </div>
    </main>
    <script src="{{ asset('js/article.js') }}"></script>
</body>

</html>
