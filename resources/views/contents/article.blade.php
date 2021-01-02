@extends('layout')

@section('title','記事一覧')

@section('contents')
<div class="article_wrapper">

    <!-- foreach分で記事を表示させる繰り返し処理 -->
    @if(!empty($article))
    @foreach($article as $values)
    <div class="articles_container">
        <div class="article_container">
            <p class="title">
                <a href="">{{$values['title']}}</a>
            </p>
            <div class="tag_like_container">
                <ul class="tags">
                    <li class="tag">
                        <a href="">#{{$values['tag']}}</a>
                    </li>
                </ul>
                <i class="fas fa-heart"  id="like"></i>
                <p class="like_count">0</p>
            </div>
            <p class="name">投稿者：{{$values['user']['name']}}</p>
        </div>
    </div>
    @endforeach
    @endif

</div>
@endsection
