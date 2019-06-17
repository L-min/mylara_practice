<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mydiary;

class PagesController extends Controller
{
    //
    public function profile(){
      return view('profile');
    }

    public function diary(){

      $diary = mydiary::all();
      return view('diary.index', compact('diary'));
    }

    public function paint(){
      return view('paint');
    }
}
