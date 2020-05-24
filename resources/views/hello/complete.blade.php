@extends('layouts.helloapp')

@section('top_title','メモグル')


@section('content')
  <p>{{$msg2}}</p>
  <a href="http://127.0.0.1:8000/hello">トップへ戻る</a>
  
@endsection

@section('footer')
  copyright 2020 nitta.
@endsection