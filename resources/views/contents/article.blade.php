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
                <a href="{{ action('ArticleController@show', $values->id) }}">{{$values['title']}}</a>
            </p>
            <div class="tag_like_container">
                <ul class="tags">
                    <li class="tag">
                        <a href="">#{{$values['tag']}}</a>
                    </li>
                </ul>
                <!-- like部分はjavascriptでpost通信できないか挑戦中 -->
                <!-- @if(Auth::id() === $values['user_id'])
                    <form action="" method="POST" name="{{$values['id']}}">
                        <a href="javascript:{{$values['id']}}.submit()">
                            <i class="fas fa-heart fa-2x pink" id="like"></i>
                        </a>
                    </form>
                @else
                    <form action="" method="POST" name="{{$values['id']}}">
                        <a href=""><i class="fas fa-heart fa-2x normal" id="like"></i></a>
                    </form>
                @endif -->
            </div>
            <p class="name">投稿者：{{$values['user']['name']}}</p>
        </div>
    </div>
    @endforeach
    @endif
</div>
@endsection
