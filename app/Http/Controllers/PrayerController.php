<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prayer;
use Mail;
class PrayerController extends Controller
{
    //
    public function index(){
      return view('pages.prayerRequest');
    }

    // Prayer request
    public function PrayerPost(Request $request){
      $this->validate($request,[
      'name' => 'required',
      'email' => 'required|email',
      'message' => 'required'
      ]);
      Prayer::create($request->all());
      Mail::send('pages.email',
      array(
          'name' => $request->get('name'),
          'email' => $request->get('email'),
          'user_message' => $request->get('message')
      ), function($message)
      {
          $message->from('saquib.gt@gmail.com');
          $message->to('stacruzparish2019@gmail.com', 'Admin')->subject('Prayer Request');
      });

      // ContactUs::create([
      //   'name' => request('name'),
      //   'email' => request('email'),
      //   'message' => request('message')
      // ]);

      return redirect('/')->with('success','Thank you for sending us your prayer, rest assured that we will pray for your intention!');
    }
}
