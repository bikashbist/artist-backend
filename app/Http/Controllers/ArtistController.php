<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Notification;
use App\Notifications\SendEmailNotification;

class ArtistController extends Controller
{
   public function editArtist($id){
      $details = User::find($id);
        return view('artist.edit-detail',compact('details'));

   }
   public function updateDetail(Request $request, $id)
   {
       $details = User::find($id);
      
    
    
       $details->detail= $request->detail;
     
     
       $details->save();
    
       return redirect()->back()->with('message','Update  Succeessfully');

      
   }
   public function sendmail(Request $request,$id)
   {
      $data = User::find($id);
      $details=[
         'heading' => $request->heading,
         'email' => $request->email,
         'password' => $request->password,
         'linkTitle' => $request->linkTitle,
         'link' => $request->link,
         'footer' => $request->footer
         
      ];
      Notification::send($data,new SendEmailNotification($details));
      return redirect()->back();
   }


   
}
