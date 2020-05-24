@extends('layouts.helloapp')

@section('top_title','メモグル')


@section('content')
  <a href="/upload">アップする</a>
  <table>
  <tr><th>Title</th><th>Picture</th><th>Memo</th></tr>
  @foreach ($items as $item)
    <tr>
      <td><img src="{{$item->photo_path}}" width="300" height="300"> </td> 
      <td>{{$item->title}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->howmuch}}</td>
      <td>{{$item->coment}}</td>
    </tr>
  @endforeach
  </table>
@endsection

@section('footer')
  copyright 2020 nitta.
@endsection