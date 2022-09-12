@extends('layouts.app')

@section('title', '電卓')

@section('content')
<form action="/calculate" method="post">
  @csrf
  <input type="submit" name="num" value="1">
  <input type="submit" name="num" value="2">
  <input type="submit" name="operator" value="+">
  <input type="submit" name="operator" value="-">
  <input type="submit" name="operator" value="/">
  <input type="submit" name="operator" value="*">
  <input type="submit" name="equal" value="=">
  <input type="submit" name="clear" value="AC">
  {{ $result }}
</form>
@endsection