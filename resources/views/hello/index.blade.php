@extends('layouts.helloapp')
<style>
    body {font-size:16px; color: #999; margin: 5px;}
    h1{font-size:50px; text-align:right; color:#f6f6f6;
    margin:-20px 0px -30px 0px; letter-spacing: -4px;}
    ul{font-size:12px;}
    hr{margin: 25px 100px; border-top: 1px dashed #ddd;}
    .menutitle {font-size: 14px; font-weight:bold; margin: 0px;}
    .content {margin:10px;}
    .footer {text-align: right; font-size: 10px; margin:10px; border-bottom:solid 1px #ccc; color:#ccc;}
    .pagination { font-size:10px; }
    .pagination li { display: inline-block }
    tr th a:link { color:white; }
    tr th a:visited {color: white; }
    tr th a:hover {color:white; }
    tr th a:active {color: while; }
</style>
@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
@if (Auth::check())
<p>USER: {{$user->name . ' (' . $user->email . ')'}}</p>
@else
<p>ログインしていません。(<a href="/login">ログイン</a>|<a href="/register">登録</a>)</p>
@endif
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述できます。</p>
<p>これは、<middleware>google.com</middleware>へのリンクです。</p>
<p>これは、<middleware>yahoo.co.jp</middleware>へのリンクです。</p>

    <table>
        <tr>
            <th><a href="/hello?sort=name">Name</a></th>
            <th><a href="/hello?sort=mail">Mail</a></th>
            <th><a href="/hello?sort=age">Age</a></th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
            </tr>
        @endforeach
    </table>
    <br>
{{ $items->appends(['sort' => $sort])->links('pagination::bootstrap-4') }}
@endsection

@section('footer')
copyright 2020 tuyano
@endsection

