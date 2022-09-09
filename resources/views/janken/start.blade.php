@extends('layouts.jankenapp')

@section('content')
<form action="">
  @csrf
  <div>
    <input type="radio" name="hand" value="goo">
    <input type="radio" name="hand" value="choki">
    <input type="radio" name="hand" value="par">
  </div>
  <div><input type="submit" value="勝負！"></div>
</form>
@endsection