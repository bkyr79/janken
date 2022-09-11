<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JankenController extends Controller
{
    public function index()
    {
        return view('janken.start');
    }

    public function result(Request $request)
    {
        $myHand = $request->get('hand');
        $cpuHand = rand(0, 2);
        $resultMsg = $this->janken($myHand, $cpuHand);
        $param = [
            'myHand' => $myHand,
            'cpuHand' => $cpuHand,
            'resultMsg' => $resultMsg,
        ];
        return view('janken.result', [
            'param' => $param,
        ]);
    }

    public function again()
    {
        return view('janken.start');
    }

    // さらに関数に分けた方が良さそう
    public function janken($myHand, $cpuHand)
    {
        $winMsg = 'あなたの勝ち！';
        $loseMsg = 'あなたの負け..';
        $drawMsg = 'あいこです';

        // グー:0, チョキ:1, パー:2
        if($myHand == 0 && $cpuHand == 1){
            return $winMsg;
        }elseif($myHand == 0 && $cpuHand == 2){
            return $loseMsg;
        }elseif($myHand == 1 && $cpuHand == 0){
            return $loseMsg;
        }elseif($myHand == 1 && $cpuHand == 2){
            return $winMsg;
        }elseif($myHand == 2 && $cpuHand == 0){
            return $winMsg;
        }elseif($myHand == 2 && $cpuHand == 1){
            return $loseMsg;
        }else{
            return $drawMsg;
        }
    }
}
