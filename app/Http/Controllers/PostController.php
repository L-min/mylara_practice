<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\mydiary;

class PostController extends Controller
{
    //
    public function create(){
      //return "check list";
      return view('diary.create');
    }
    public function postview(Request $request){
      //return "check list";
      //dd(Request::all());

      $diary = new mydiary();
      $diary->title = $request->title;
      $diary->content = $request->content;
      $diary->save();

      $diary = mydiary::all();
      return view('diary.index', compact('diary'));
    }
    public function edit($id){
      //return "check list";
      $diary = mydiary::find($id);
      return view('diary.edit', compact('diary'));
    }

    public function afteredit(Request $request){

      $diary = mydiary::find($request->id);
      $diary->title = $request->title;
      $diary->content = $request->content;
      $diary->save();

      //$diary2 = mydiary::all();
      //return view('diary.index', compact('diary2'));
      return redirect()->route('mindiary_index');
    }

    public function afterdelete($id){

      mydiary::destroy($id);

      return redirect()->route('mindiary_index');
      //$diary = mydiary::all();
      //return view('diary.index', compact('diary'));
    }
}
