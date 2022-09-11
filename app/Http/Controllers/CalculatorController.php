<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    public function index()
    {
        $one = '';
        $two = '';
        $hoge = $request->session()->all();
        return view('calculator.index', [
            'one' => $one,
            'two' => $two,
            'hoge' => $hoge,
        ]);
    }

    // 現状の書き方❌
    // セッションを保存する関数、保存されたセッションを表示する関数とで分けないといけない
    public function calculate(Request $request)
    {
        $hoge = '';
        $one = $request->get('one');
        $request->session()->put('one', $one);
        $one_get = $request->session()->get('one');
        $two = $request->get('two');
        $request->session()->put('two', $two);
        $two_get = $request->session()->get('two');
        if($request->session()->has('one')){
            $hoge = 'セッションoneは存在します';
        }
        return view('calculator.index', [
            'one' => $one_get,
            'two' => $two_get,
            'hoge' => $hoge,
        ]);
    }
}
