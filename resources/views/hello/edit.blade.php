@extends('layouts.helloapp')

@section('top_title','メモグル')


@section('content')
  <h2>編集</h2>
  @if (count($errors) > 0)
    <p>入力に問題があります。</p>
  @endif
  <form method="POST" action="/edit" >
    @csrf
    <input type="hidden" name="gurume_id" value="{{$form->gurume_id}}">

    タイトル：<input type="text" name='title' size='50' value="{{$form->title}}">
    @error('title')
        <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
    @enderror<br>

    アクセス：<input type="text" name='address' size='30' value="{{$form->address}}">
    
    使ったお金　約：<input type="text" name='howmuch' size='15' value="{{$form->howmuch}}">円<br>
    
    メモ<br>
    <textarea name="coment"  cols="50" rows="10" >{{$form->coment}}</textarea>
    <input type="submit" value="更新">
    @error('coment')
        <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
    @enderror
    
  </form>
  <a href="/hello">トップへ戻る</a>
@endsection

@section('footer')
  copyright 2020 nitta.
@endsection