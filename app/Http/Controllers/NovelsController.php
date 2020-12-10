<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Novel;
use Illuminate\Support\Facades\DB;
class NovelsController extends Controller
{
    //
    function index(){ //https://laravel.com/docs/8.x/pagination#displaying-pagination-results
      $data= DB::table("novels")->orderBY('id','desc')->simplePaginate(10);
      //$data = Novel::all();
      return view('pages.frontend.welcome',['novels'=>$data]);
    }

    function onlyOne($id){ //https://laravel.com/docs/8.x/queries#retrieving-a-single-row-column-from-a-table
      $data= DB::table("novels")->where('id',$id)->first();
      return view('pages.frontend.singleNovel',['novel'=>$data]);
    }

    public function store(request $request){
      //link video : https://www.youtube.com/watch?v=lPSg8LBFzZQ&list=PLMWEEzYqZ0em1vnBx8F5GZd94Ejph4TjO&index=12&ab_channel=ThibaudDauce
      $novel = Novel::query()->create([
        'title'       => $request['title'],
        'author'      => $request['author'],
        'isbn'        => $request['isbn'],
        'genre'       => $request['genre'],
        'format'      => $request['format'],
        'page_count'  => $request['pageCount'],
        'cover'       => $request['cover']
      ]);
      return redirect()->route('welcome'); //view('pages.home');
    }

    
    function update(request $request){
      $novel = NOvel::query()->update([
        //
      ]);
    }

}
