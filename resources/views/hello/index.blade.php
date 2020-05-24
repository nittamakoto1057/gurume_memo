@extends('layouts.helloapp')

@section('top_title','メモグル')


@section('content')
  <table>
  <tr><th>Title</th><th>Picture</th><th>Memo</th></tr>
  @foreach ($items as $item)
    <tr>
      <td>{{$item->title}}</td>
      <td><img src="{{$item->photo_path}}" width="300" height="300"> </td> 
      <td>{{$item->coment}}</td>
    </tr>
  @endforeach
  </table>
@endsection

@section('footer')
  copyright 2020 nitta.
@endsection