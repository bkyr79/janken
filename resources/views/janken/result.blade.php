@extends('layouts.app')

@section('title', 'じゃんけんゲーム')

@section('content')
{{-- if文をビューで書くべきなのか、コントローラで書くべきなのか悩む --}}
あなたは
@if($param['myHand'] == 0)
グー
@elseif($param['myHand'] == 1)
チョキ
@elseif($param['myHand'] == 2)
パー
@endif
を出しました
CPUは
@if($param['cpuHand'] == 0)
グー
@elseif($param['cpuHand'] == 1)
チョキ
@elseif($param['cpuHand'] == 2)
パー
@endif
を出しました
<div>結果は   {{ $param['resultMsg'] }}</div>
<div>
  <form action="/again" method="get">
  <input type="submit" value="もう一度">
  </form>
</div>
@endsection