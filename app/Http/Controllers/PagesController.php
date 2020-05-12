<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    //
    public function history(){
      return view('pages.history');
    }

    public function schedule(){
      return view('pages.schedule');
    }

    public function about(){
      return view('pages.about');
    }
}
