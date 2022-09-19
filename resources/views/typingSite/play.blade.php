@extends('layouts.app')

@section('title', 'プレイ画面')

@section('content')
<h1>正解！！（第一問では表示されない）</h1>
<p>日本語文</p>
<p>nihonngobun</p>
<form action="/submitTopic" type="post">
  <input type="text" name="input">
  <input type="submit" value="送信">
</form>
@endsection