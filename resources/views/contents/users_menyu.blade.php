@extends('layout')

@section('title','マイページ')

@section('contents')
<div class="users_wrapper">
    <div class="uses_container">
        <div class="user_img">
            <img src="" alt="">
        </div>
        <p class="user_name">{{Auth::user()->name}}のマイページ</p>
    </div>

    <div class="user_article">
        <div class="article_list_title">
            <p>投稿した記事</p>
        </div>
        <div class="like_list_title">
            <!-- <p><a href="">いいねした記事一覧</a></p> -->
        </div>
    </div>

    <hr>

    <div class="article_wrapper">
        <!-- foreach分で記事を表示させる繰り返し処理 -->
        @if(!empty($article))
        @foreach($article as $values)
        <div class="articles_container">
            <div class="article_container">
                <p class="title">
                    <a href="{{ action('ArticleController@show', $values->id) }}">{{$values['title']}}</a>
                </p>
                <div class="tag_like_container">
                    <ul class="tags">
                        <li class="tag">
                            <a href="">#{{$values['tag']}}</a>
                        </li>
                    </ul>
                    <!-- <i class="fas fa-heart fa-2x pink" id="like"></i>
                    <p class="like_count">0</p> -->
                </div>

                <div class="under">
                    <p class="name">投稿者：{{$values['user']['name']}}</p>
                    <div class="edit_delete_btn">
                        <a href="{{route('edit_index',$values['id'])}}" class="edit_btn">編集</a>
                        <form action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="article_id" value="{{$values['id']}}">
                            <input type="submit" value="消去" class="delete_btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
    @endsection
