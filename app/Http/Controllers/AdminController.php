<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\ArtistForm;

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
  
    
    
    
}
