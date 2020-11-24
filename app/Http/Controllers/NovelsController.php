<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Novel;
use Illuminate\Support\Facades\DB;
class NovelsController extends Controller
{
    //
    function show(){
      $data= DB::table("novels")->get();
      //$data = Novel::all();
      return view('pages.frontend.welcome',['novels'=>$data]);
    }

    function onlyOne(){
      $data= DB::table("novels")->find(3);
      return view('pages.frontend.singleNovel',['novels'=>$data]);
    }
}
