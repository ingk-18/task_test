<?php

namespace App\Http\Controllers;

use Illuminate\Suppot\Facades\DB;
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
        DB::table('tests')->where('test', '=', 'foofoo')
            ->get();

        dd($hoge, $foo, $bar);

        return view('tests.test', compact('hoge'));

    }
}
