<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;

class PlayController extends Controller
{
    public function play(Request $request){
        // 結果一覧で使用するセッションを削除する
        if($request->session()->has('vals')){
            $request->session()->forget([
                "vals.0", "vals.1", "vals.2", "vals.3", "vals.4"
            ]);
            $request->session()->forget('count');

            // $request->session()->flush();
            // dd($request->session());
        }

        // 1問目の表示の際、ランダムで選んだ５トピックスをセッション保存しておく
        if(!$request->session()->has('vals.0')){
            $topics = new Topic();
            $topics = $topics->randomFiveTopics();
            $request->session()->put('hoge2', $topics);
            $hoge = $request->session()->get('hoge2');
        }
dd($request->session());

        $japanese_word = $topics[0]->japanese_word;
        $english_word = $topics[0]->english_word;
        // dd($english_word);
        dd($topics);

        return view('typingSite.play');
    }

    public function submitTopic(Request $request)
    {
        if($request->session()->has('count')){
            $count = $request->session()->get('count');
        }else{
            $count = 0;
        }

        $count++;

        $request->session()->put('count', $count);

        $value = $request->input;
        // セッション保存
        $request->session()->push('vals', $value);

        // ５問目の場合は結果画面に遷移する
        if($count == 5){
            $vals = $request->session()->get('vals');
            return view('typingSite.result', [
                'vals' => $vals,
            ]);
        }

        return view('typingSite.play');
    }
}
