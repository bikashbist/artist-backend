<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ArtistForm;
use App\Models\Userartist;
use Illuminate\Support\Facades\Notification;
use Illuminate\Notifications\Notifiable;
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
      $data = user::find($id);

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
   public function userArtist(Request $request)
   {
      $this->validate($request,[
           
         'image'=>'required|mimes:jpeg,png,jpg,gif,svg',
     ]);
      $image = $request->file('image')->store('public/file');
      Userartist::create([
      
           'artist_id'=>$request->artist_id,
           'artistId'=>$request->artistId,
           'name'=>$request->name,
           'email'=>$request->email,
        
           'category'=>$request->category,
           'image'=>$image

       ]);

       return redirect()->back()->with('message','Artist added To The User Dashboard  Succeessfully');
   }

}
