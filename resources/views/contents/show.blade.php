@extends('layout')

@section('title','記事詳細')

@section('contents')
    <div class="show_container">
        <h1 class="show_title">
            <a href="{{$article['url']}}"  target="_blank">{{$article['title']}}<i class="fas fa-external-link-square-alt"></i></a>
        </h1>
        <div class="tag_like_container">
            <ul class="tags">
                <li class="tag">
                    <a href="">#{{$article['tag']}}</a>
                </li>
            </ul>
            <!-- 
            <a href=""><i class="fas fa-heart fa-2x normal" id="like"></i></a>
            <p class="like_count"></p>
            -->
        </div>
        <p class="name">投稿者：{{$article['user']['name']}}</p>

        <div class="comment_btn">
            <a href="{{ $article['id'] }}/contents.comment ">
                <input type="submit" value="この記事にコメントする">
            </a>
        </div>
    </div>

    <div class="comment_list_container">
        <p>コメント一覧</p>
        <hr>
        @foreach($comments as $comment)
        @if($article['id'] === $comment['article_id'])
        <div class="article_container">
            <p class="title">
                {{ $comment['body'] }}
            </p>
            <p class="name">投稿者：{{$comment['user']['name']}}</p>

    </div>
    @endif
    @endforeach





@endsection
