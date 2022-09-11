@extends('layouts.jankenapp')

@section('title', '電卓')

@section('content')
<form action="/janken" method="post">
  @csrf
    <table>
      <tr><th>グー</th><th>チョキ</th><th>パー</th></tr>
      <tr>
        <td><input type="radio" name="hand" value="0"></td>
        <td><input type="radio" name="hand" value="1"></td>
        <td><input type="radio" name="hand" value="2"></td>
      </tr>
      <tr><td><input type="submit" value="勝負！"></td></tr>
    </table>
</form>
@endsection