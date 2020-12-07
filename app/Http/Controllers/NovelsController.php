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

    public function store(){
      //link video : https://www.youtube.com/watch?v=lPSg8LBFzZQ&list=PLMWEEzYqZ0em1vnBx8F5GZd94Ejph4TjO&index=12&ab_channel=ThibaudDauce
      $title = request('title');
      $author = request('author');
      $isbn = request('isbn');
      $genre = request('genre');
      $format = request('format');
      $pagesCount = request('pages-count');
      $cover = request("cover");

      $novel = new Novel();
      $novel->title = $title;
      $novel->author = $author;
      $novel->isbn = $isbn;
      $novel->genre = $genre;
      $novel->format = $format;
      $novel->page_count = $pagesCount;
      $novel->cover = $cover;
      $novel->save();

      return back();
    }

}
