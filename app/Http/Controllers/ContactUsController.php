<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ContactUs;
use Mail;
class ContactUsController extends Controller
{
    //
    public function contactUs(){
      return view('pages.contact');
    }

    public function contactUsPost(Request $request){
      $this->validate($request,[
      'name' => 'required',
      'email' => 'required|email',
      'message' => 'required'
      ]);
      ContactUs::create($request->all());
      Mail::send('pages.email',
      array(
          'name' => $request->get('name'),
          'email' => $request->get('email'),
          'user_message' => $request->get('message')
      ), function($message)
      {
          $message->from('saquib.gt@gmail.com');
          $message->to('stacruzparish2019@gmail.com', 'Admin')->subject('Parishioner Concern');
      });

      // ContactUs::create([
      //   'name' => request('name'),
      //   'email' => request('email'),
      //   'message' => request('message')
      // ]);

      return back()->with('success','Thank you for contacting us!');
    }

    // Post::create([
    //         'title' => request('title'),
    //         'body' => request('blog_content'),
    //         'image' => $filename,
    //         'user_id' => auth()->user()->id,
}
