@extends('layouts.helloapp')

@section('top_title','メモグル〜食べた物の写真をコメント付きで記録〜')


@section('content')
  <h2><a href="/upload">アップする</a></h2>
  <table>
  @foreach ($items as $item)
    <tr><th>Picture</th><th>Information[<a href="/edit?id={{$item->gurume_id}}">編集</a>][<a href="/del?id={{$item->gurume_id}}">削除</a>]</th></tr>
    <tr>
      <td><img src="{{$item->photo_path}}" width="300" height="300"> </td> 
      <td>
        <ul>
          <h3>タイトル：{{$item->title}}</h3>
          <li>アクセス：{{$item->address}}</li><br>
          <li>かかったお金：約{{$item->howmuch}}円</li><br>
          <li>メモ：{{$item->coment}}</li>
        </ul>
      </td>
    </tr>
  @endforeach
  </table>
@endsection

@section('footer')
  copyright 2020 nitta.
@endsection