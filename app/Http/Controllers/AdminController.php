<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\ContactUs;
use App\Prayer;
class AdminController extends Controller
{
    //
    //
    public function createEventAdmin(){
      return view('admin.views.admin-create');
    }

    public function submitEventAdmin(){

      $this->validate(request(),[
        'title' => 'required|unique:events',
        'body' => 'required',
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

      return redirect('admin/events')->with('status','Events Posted!');
      }
    //
    //
      public function getadminEvents(){
         $events = Event::orderBy('created_at','DESC')->paginate(3);
         return view('admin/views/admin-events',compact('events'));
       }

      public function editEvent(Event $id){
           $events = Event::where('id','=',$id->id)->first();
           return view('admin.views.admin-edit',compact('events'));
       }

       public function updateEvent(Event $id){
           $this->validate(request(),[
               'title' => 'required|unique:events,title,'.$id->id
           ]);
           $events = Event::where('id','=',$id->id)->first();
           $events->body = request('body');
           $events->title = request('title');
           $events->save();

           return redirect('/admin/events')->with('status','Event Updated!');
       }

       public function deleteEvent($id) {
          $events = Event::find($id);

          if($events != null){
          $events->delete();
          return redirect('/admin/events')->with('status','A post of an Event has delete successfully!');
          }
          return redirect('/admin/events')->with('status','A post of an Event hasnt deleted!');
        }

        //
        //
        // Contact
        public function getAllContact(){
          $contacts = ContactUs::orderBy('created_at','DESC')->paginate(5);
          return view('admin.views.admin-contactus',compact('contacts'));
        }

        public function deleteContact($id){
          $contacts = ContactUs::find($id);

          if($contacts != null){
            $contacts->delete();
            return redirect('/admin/contact-us')->with('status','A Message has delete successfully!');
          }
          return redirect('/admin/contact-us')->with('status','A Message hasnt deleted yet!');

        }

        public function getallPrayerRequest(){
          $requests = Prayer::orderBy('created_at','DESC')->paginate(5);
          return view('admin.views.admin-prayer-request',compact('requests'));
        }
        public function deletePrayerRequest($id){
          $requests = Prayer::find($id);

          if($requests != null){
            $requests->delete();
            return redirect('/admin/prayer-request')->with('status','A Message has delete successfully!');
          }
          return redirect('/admin/prayer-request')->with('status','A Message hasnt deleted yet!');
        }
}
