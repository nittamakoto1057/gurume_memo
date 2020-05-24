@extends('layouts.helloapp')

@section('top_title','メモグル')


@section('content')
  <p>{{$msg2}}</p>
  <a href="/hello">トップへ戻る</a>
  
@endsection

@section('footer')
  copyright 2020 nitta.
@endsection