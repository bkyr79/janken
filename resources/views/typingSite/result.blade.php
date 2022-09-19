@extends('layouts.app')

@section('title', '結果画面')

@section('content')
<table>
  <tr></tr>結果一覧<th></th>
  @foreach ($vals as $val)
  <tr><td>{{ $val }}</td></tr>
  @endforeach
</table>
@endsection