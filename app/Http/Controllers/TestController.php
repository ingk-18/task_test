<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Test;

class TestController extends Controller
{
    public function index(){
        $hoge = Test::all();

        $foo = Test::findOrFail(1);

        // エロケント
        $bar = Test::where('text', '=', 'hogehoge')
            ->get();

        // クエリビルダ
        DB::table('tests')->where('text', '=', 'foofoo')
            ->get();

        dd($hoge, $foo, $bar);

        // Viewへ渡す
        return view('tests.test', compact('hoge'));

    }
}
