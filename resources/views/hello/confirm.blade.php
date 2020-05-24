@extends('layouts.helloapp')

@section('top_title','メモグル')


@section('content')
    <form action="complete" method="post">
        @csrf
        <table>
            <tr>
                <td>画像</td>
                <td><img src="{{ $data['read_image_path'] }}" width="400" height="400"></td>
            </tr>
            <tr>
                <td>タイトル</td>
                <td>{{ $data['title'] }}</td>
            </tr>
            <tr>
                <td>アクセス</td>
                <td>{{ $data['address'] }}</td>
            </tr>
            <tr>
                <td>使ったお金</td>
                <td>約{{ $data['howmuch'] }}円</td>
            </tr>
            <tr>
                <td>メモ</td>
                <td>{{ $data['coment'] }}</td>
            </tr>

        </table>
        <input type="submit" name="action" value="送信" />
    </form>
@endsection

@section('footer')
  copyright 2020 nitta.
@endsection