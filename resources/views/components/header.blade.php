<!-- 削除予定 -->
<div class="header_wrapper">
    <div class="header_contaier">
        <div class="header_title">
            <p>Minny</p>
        </div>
        <div class="header_nav">
            <!-- ここに Authで作成したログイン機能を追加予定 -->
            <a href="{{route('post_create')}}">投稿</a>
            <a href="{{route('login')}}">ログイン</a>
        </div>
    </div>
</div>
<!-- ここまで -->

<!-- ヘッダー -->
<div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Minny') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="" href="{{ route('post_create') }}">投稿</a>
                <a class="" href="{{ route('login') }}">ログイン</a>
            </li>
        </ul>
    </div>
</div>
