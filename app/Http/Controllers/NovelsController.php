<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Novel;
use Illuminate\Support\Facades\DB;
class NovelsController extends Controller
{
    //
    function show(){ //https://laravel.com/docs/8.x/pagination#displaying-pagination-results
      $data= DB::table("novels")->orderBY('id','desc')->simplePaginate(10);
      //$data = Novel::all();
      return view('pages.frontend.welcome',['novels'=>$data]);
    }

    function onlyOne($id){ //https://laravel.com/docs/8.x/queries#retrieving-a-single-row-column-from-a-table
      $data= DB::table("novels")->where('id',$id)->first();
      return view('pages.frontend.singleNovel',['novel'=>$data]);
    }

}
