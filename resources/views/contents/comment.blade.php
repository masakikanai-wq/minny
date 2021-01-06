@extends('layout')

@section('title','コメント投稿フォーム')

@section('contents')
<div class="post_container">
    <p>コメント投稿</p>
    <form action="" method="POST">
        @csrf
        <input type="hidden" name="article_id" value="{{ $article->id }}">
        <div class="comment_container">
            <label for="comment">
                <p>コメント</p>
            </label>
            <input type="text" id="body" name="body" class="post_input">
        </div>
        <div class="btn">
            <input type="submit" value="コメントする">
        </div>
    </form>
</div>
@endsection
