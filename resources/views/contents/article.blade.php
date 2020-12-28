@extends('layout')

@section('title','記事一覧')

@section('contents')
<div class="article_wrapper">
    <div class="articles_container">
        <!-- foreach分で記事を表示させる繰り返し処理 -->
        @if(!empty($article))
            @foreach($article as $value)
                <div class="article_container">
                    <p>{{$value['title']}}</p>
                    <p>{{$value['tag_id']}}</p>
                    <p>{{$value['user_id']}}</p>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
