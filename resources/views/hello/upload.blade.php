@extends('layouts.helloapp')

@section('top_title','メモグル')


@section('content')
  <p>{{$msg1}}</p>
  @if (count($errors) > 0)
    <p>入力に問題があります。</p>
  @endif
  <form method="POST" action="confirm" enctype="multipart/form-data">
    @csrf
    
    タイトル：<input type="text" name='title' size='50' value="{{old('title')}}">
    @error('title')
        <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
    @enderror<br>
    
    写真：<input type="file" name="photo">
    @error('photo')
        <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
    @enderror<br>
    
    メモ<br>
    <textarea name="coment" value="コメントを書きましょう" cols="50" rows="10" value="{{old('coment')}}"></textarea>
    <input type="submit">
    @error('coment')
        <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
    @enderror
  </form>
@endsection

@section('footer')
  copyright 2020 nitta.
@endsection