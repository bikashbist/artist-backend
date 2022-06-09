<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\ArtistForm;
use App\Models\User;
use App\Models\Province;
use App\Models\Imagegaller;
use App\Models\Profile;
use App\Models\Coverimage;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdminController extends Controller
{
   
    public function addCategory(){
        $cat = Category::get();
        return view('admin.add-category',compact('cat'));
    }
  
    public function categoryStore(Request $request)
    {
        $this->validate($request,[
            'category'=>'required',
              
        ]);
       
        Category::create([
            'category'=>$request->category,
     
          
        ]);
        return redirect()->back()->with('message','Category Create  Succeessfully');
    }
    public function editCategory($id){
        $editCategory = Category::find($id);
        return view('admin.edit-category',compact('editCategory'));


    }
    public function categoryupdate(Request $request, $id){
        $cat = Category::find($id);
        $cat->category= $request->category;
        $cat->save();
      
        return redirect()->back()->with('message','Category update Succeessfully');


    }
    public function artistDetail($id){
        $artForm = ArtistForm::find($id);
        return view('admin.artist-form',compact('artForm'));
    }

  
    

    //add artist

     public function addArtist(Request $request)
    {
        $this->validate($request,[

            'usertype'=>'required',
            'artist_id'=>'required',
            'name'=>'required',
            'email'=>'required',
            'category'=>'required',
            'password' => 'required',
              
        ]);
       
        User::create([
            'usertype'=>$request->usertype,
            'artist_id'=>$request->artist_id,
            'name'=>$request->name,
            'email'=>$request->email,
            'detail'=>$request->detail,
            'category'=>$request->category,

            'password' => Hash::make($request->password),
        
     
        ]);
        return redirect()->back()->with('message','Artist Create  Succeessfully');
    }
    public function listArtist() {
        
        $artist = User::where('usertype','2')->get();
       
        return view('admin.artist-list',compact('artist'));
    }
    public function NewartistDetail($id){
        $artistDetail = User::find($id);
        $address = Province::where('artist_id',$artistDetail->artist_id)->get();
        $gallery = Imagegaller::where('artist_id',$artistDetail->artist_id)->get();
        $profile = Profile::where('artist_id',$artistDetail->artist_id)-> orderBy('id', 'desc')
        -> get();
        $coverImage = Coverimage::where('artist_id',$artistDetail->artist_id)-> orderBy('id', 'desc')
        -> get();
        return view('admin.artist-detail',compact('artistDetail','address','gallery','profile','coverImage'));
    }
      //artist mail
      public function artistMail($id){
        $artistMail = ArtistForm::find($id);
        $mail = User::where('artist_id',$artistMail->id)->get();
        return view('admin.artist-mail',compact('mail'));
    }
    
    
}
