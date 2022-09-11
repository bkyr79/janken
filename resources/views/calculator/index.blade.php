@extends('layouts.app')

@section('title', '電卓')

@section('content')
<form action="/calculate" method="post">
  @csrf
  <input type="submit" name="one" value="1">
  <input type="submit" name="two" value="2">
  <input type="submit" name="plus" value="+">
  <input type="submit" name="equal" value="=">
  {{-- <input type="text" name=""> --}}
  {{ $one }}
  {{ $two }}
  {{ $hoge }}
</form>
@endsection