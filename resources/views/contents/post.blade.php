@extends('layout')

@section('title','投稿フォーム')

@section('contents')
<div class="post_container">

    <p>新規投稿</p>
    <form action="" method="POST">
        @csrf
        <div class="title_container">
            <label for="title">
                <p>タイトル</p>
            </label>
            <input type="text" name="title" id="title" class="post_input">
            @if ($errors->has('title'))
                <li>{{$errors->first('title')}}</li>
            @endif
        </div>
        <div class="url_container">
            <label for="url">
                <p>記事URL</p>
            </label>
            <input type="text" id="url" name="url" class="post_input">
            @if ($errors->has('url'))
                <li>{{$errors->first('url')}}</li>
            @endif
        </div>
        <div class="tag_container">
            <p>タグ</p>
            <select name="tag" id="tag">
                <option value="HTML">HTML</option>
                <option value="CSS">CSS</option>
                <option value="JavaScript">JavaScript</option>
                <option value="PHP">PHP</option>
                <option value="Mysql">Mysql</option>
                <option value="Laravel">Laravel</option>
                <option value="AWS">AWS</option>
            </select>
        </div>
        <div class="btn">
            <input type="submit" value="投稿">
        </div>
    </form>

</div>
@endsection
