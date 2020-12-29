<!DOCTYPE html>
<html lang="ja">

<head>
    @yield('head')
</head>

<body>
    <header>
        @component('components.header')
        @endcomponent
    </header>
    <main>
        <div class="container">
            <!-- 画面の大きさなどは共通なのでcontainer -->
            <div class="contents_wrapper">
                <!-- contents_containerの中に各自でコードを書いていく -->
                <!-- contentsフォルダにそれぞれ書いたコードを管理する -->
                @yield('contents')
            </div>
        </div>
    </main>
</body>

</html>
