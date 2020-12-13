@extends('layouts.helloapp')
<style>
    .pagination { font-size:10px; }
    .pagination li { display: inline-block}
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
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述できます。</p>
<p>これは、<middleware>google.com</middleware>へのリンクです。</p>
<p>これは、<middleware>yahoo.co.jp</middleware>へのリンクです。</p>

    @component('components.message')
        @slot('msg_title')
            CAUTION!
        @endslot
        @slot('msg_content')
            これはメッセージの表示です。
        @endslot
    @endcomponent
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
    {{ $items->appends(['sort' => $sort])->links() }}
@endsection

@section('footer')
copyright 2020 tuyano
@endsection

