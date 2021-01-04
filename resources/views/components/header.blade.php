<!-- 削除予定 -->

<!-- ここまで -->

<!-- ヘッダー -->
<div class="container">
    <nav class="header_nav">
        <div class="logo-name">
            <p><a class="minny" href="{{ url('/') }}">{{ config('app.name', 'Minny') }}</a></p>
        </div>
        <div class="nav_content">
            <ul class="nav-items">
                @guest
                @if (Route::has('register'))
                <li class="nav_item">
                    <a class="nav_link" href="{{ route('register') }}">サインアップ</a>
                </li>
                <li class="nav_item">
                    <a class="nav_link" href="{{ route('login') }}">ログイン</a>
                </li>
                @endif
                @else
                <!-- 各ルートでheaderの表示を変えている -->
                @if(Route::is('article_index'))
                    <li class="nav_item">
                        <a href="{{route('post_index')}}" class="nav_link">新規投稿</a>
                    </li>
                    <li class="nav_item">
                        <a href="{{route('user_index')}}" class="nav_link">マイページ</a>
                    </li>
                @elseif(\Route::is('post_index'))
                    <li class="nav_item">
                        <a href="{{route('user_index')}}" class="nav_link">マイページ</a>
                    </li>
                    <li class="nav_item">
                        <a href="{{route('article_index')}}" class="nav_link">記事一覧</a>
                    </li>
                @else
                    <li class="nav_item">
                        <a href="{{route('post_index')}}" class="nav_link">新規投稿</a>
                    </li>
                    <li class="nav_item">
                        <a href="{{route('article_index')}}" class="nav_link">記事一覧</a>
                    </li>
                @endif

                @endguest

            </ul>
        </div>
    </nav>
</div>
