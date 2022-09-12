<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    public function index(Request $request)
    {
        $result = '';
        return view('calculator.index', [
            'result' => $result,
        ]);
    }

    // 現状の書き方❌
    // セッションを保存する関数、保存されたセッションを表示する関数とで分けないといけない
    public function calculate(Request $request)
    {
        if($request->get('clear')){
            $request->session()->flush();
            $request->session()->put('one', '');
            $request->session()->put('two', '');
        }

        // 同じ数字同士の計算もできるように..
        // 複数回の演算もできるように..
        // セッションを保存する条件を考える

        // 数字であれば、数字をセッション保存する
        if($request->get('num')){
            $first = $request->get('num');
            $request->session()->put('first', $first);
        }

        // 数字をセッション保存していれば、演算子をセッション保存する
        if($request->session()->get('first')){
            $second = $request->get('operator');
            $request->session()->put('second', $second);
        }

        // 演算子をセッション保存していれば、数字をセッション保存する
        if($request->session()->get('second')){
            $third = $request->get('num');
            $request->session()->put('third', $third);
        }

        // 数字をセッション保存していれば、計算する
        if($request->session()->get('third')){
            $number1 = $request->session()->get('first');
            $operator = $request->session()->get('second');
            $number2 = $request->session()->get('third');
            $result = $number1 . $operator . $number2;
        }

        return view('calculator.index', [
            'result' => $request,
        ]);
    }
}
