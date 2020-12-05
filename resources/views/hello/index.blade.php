@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述できます。</p>
<p>ViewComposer value<br>'view_message' = {{$view_message}}</p>
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
    <p>{{$msg}}</p>
    @if (count($errors) > 0)
        <p>入力に問題があります。再入力してください。</p>
    @endif
    <form action="/hello" method="POST">
        <table>
            @csrf
            @error('name')
                <tr><th>ERROR</th>
                <td>{{$message}}</td></tr>
            @enderror
            <tr><th>name: </th><td><input type="text"
            name="name" value="{{old('name')}}"></td></tr>
            @error('mail')
                <tr><th>ERROR</th>
                <td>{{$message}}</td></tr>
            @enderror
            <tr><th>mail: </th><td><input type="text"
            name="mail" value="{{old('mail')}}"></td></tr>
            @error('age')
                <tr><th>ERROR</th>
                <td>{{$message}}</td></tr>
            @enderror
            <tr><th>age: </th><td><input type="text"
            name="age" value="{{old('age')}}"></td></tr>
            <tr><th></th><td><input type="submit"
                value="send"></td></tr>
        </table>
    </form>
@endsection

@section('footer')
copyright 2020 tuyano
@endsection

