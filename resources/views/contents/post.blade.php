@extends('layout')

@section('title','投稿フォーム')

@section('contents')
<div class="post_container">
    <form action="" method="POST">
        @csrf
        <div class="title_container">
            <label for="title">
                <p>タイトル</p>
            </label>
            <input type="text" name="title" id="title">
        </div>
        <div class="url_container">
            <label for="url">
                <p>URL</p>
            </label>
            <input type="text" id="url" name="url">
        </div>
        <div class="tag_conatiner">
            <p>タグ</p>
            <input type="text" name="tags">
        </div>
        <div class="btn">
            <input type="submit" value="投稿">
        </div>
    </form>
</div>
@endsection
