@extends('layout')

@section('title',マイページ)

<div class="users_wrapper">
    <div class="user_plofil_container">
        <div class="img">
            <a href=""></a>
        </div>
        <div class="">
            @if($user)
            @foreach($users as $value)
            <p class="user_name">
                {{$value['name']}}のマイページ
            </p>
            @endforeach
            @endif
        </div>

    </div>
    <div class="article_container">
        <p class="likes_article">
            いいねした記事一覧
        </p>
        <hr>
        <!-- foreach分で記事を表示させる繰り返し処理 -->
    </div>
</div>
