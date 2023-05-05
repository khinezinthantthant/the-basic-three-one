<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function run(){
        return view('about',[
            "a" => "aaa",
            "b" => "bbb"
        ]);
    }

    public function area($w,$h){
        return $w * $h;
    }
}
