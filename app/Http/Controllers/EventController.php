<?php

namespace App\Http\Controllers;
use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    //
    public function event(){
      return view('pages.event');
    }

    public function submitEvent(){

      $this->validate(request(),[
        'title' => 'required|unique:events',
        'image' => 'required|mimes:jpg,jpeg,gif,png|nullable',
      ]);

      $file = request()->file('image');
      $filename = md5($file->getClientOriginalName().time()).".".$file->getClientOriginalExtension();
      $file->move(base_path().'/public/eventsImg',$filename);

      Event::create([
        'title' => request('title'),
        'body' => request('body'),
        'image' => $filename,
      ]);

      return redirect('/events')->with('status','Events Posted!');
    }

    public function getAllEvent(){
       $events = Event::orderBy('created_at','DESC')->paginate(6);
       return view('pages.event',compact('events'));
     }

     public function viewEvent(Event $id){
        $events = Event::where('id','=',$id->id)->first();
        return view('pages.eventView',compact('events'));
    }

    // public function editEvent(Event $id){
    //       $events = Event::where('id','=',$id->id)->first();
    //       return view('pages.editEvents',compact('events'));
    //   }
    //   public function updateEvent(Event $id){
    //       $this->validate(request(),[
    //           'title' => 'required|unique:events,title,'.$id->id
    //       ]);
    //       $events = Event::where('id','=',$id->id)->first();
    //       $events->body = request('body');
    //       $events->title = request('title');
    //       $events->save();
    //
    //       return redirect('/events')->with('status','Event Updated!');
    //   }
    //
    //   public function deleteEvent($id) {
    //    $events = Event::find($id);
    //
    //    if($events != null){
    //    $events->delete();
    //    return redirect('/events')->with('status','A post of an Event has delete successfully!');
    //    }
    //    return redirect('/events')->with('status','A post of an Event hasnt deleted!');
    //  }

}
