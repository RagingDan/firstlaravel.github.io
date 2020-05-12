<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    public function create(){
      return view ('pages.contact');
    }

    public function store(Request $request)
    {
      $this->validate($request,[
        'name' => 'required',
        'email' => 'required|email',
        'number' => 'required',
        'message' => 'required'
      ]);
    }
}
