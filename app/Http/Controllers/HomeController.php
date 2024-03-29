<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ArtistForm;
use App\Models\Imagegaller;
use App\Models\Province;
use App\Models\Profile;
use App\Models\Coverimage;
use App\Models\Userartist;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */

    public function index()
    {
        $listArtist = Userartist::get();
       
      
        $artForm = ArtistForm::get();
        $imagegaller = Imagegaller::where('artistId', auth()->id())->get();
        $location = Province::where('artistId', auth()->id())-> orderBy('id', 'desc')
        -> get();
        $profile = Profile::where('artistId', auth()->id())-> orderBy('id', 'desc')
        -> get();
        $coverimage = Coverimage::where('artistId', auth()->id())-> orderBy('id', 'desc')
        -> get();
       
        if(Auth::id()){
            if(Auth::user()->usertype=='0'){
                return view('admin.base',compact('artForm'));
            }
            elseif (Auth::user()->usertype=='2'){
                return view('artist.base',compact('imagegaller','location','profile','coverimage'));
            }
            else{
                return view('user.base',compact('listArtist'));
            }
        }
        else{
            return view('user.base',compact('listArtist'));
        }
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
    public function detailArtist($id)
    {
        $artistview = Userartist::find($id);
        $address = Province::where('artist_id',$artistview->artist_id)->orderBy('id', 'desc')->get();
        $gallery = Imagegaller::where('artist_id',$artistview->artist_id)->get();
        $profile = Profile::where('artist_id',$artistview->artist_id)-> orderBy('id', 'desc')
        -> get();
        $coverImage = Coverimage::where('artist_id',$artistview->artist_id)-> orderBy('id', 'desc')
        -> get();
       
        return view('user.artist-detail',compact('artistview','address','gallery','profile','coverImage'));
    }
    public function detailForm()
    {
        $cat = Category::get();
        return view('user.artist-form',compact('cat'));
    }

    //artist form

    public function artistStore(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'category'=>'required',
            'address'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $image = $request->file('image')->store('public/file');
        ArtistForm::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'category'=>$request->category,
            'address'=>$request->address,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'image'=>$image
        ]);
        return redirect()->back()->with('message','Thank You, Check your Email, We Will Contact You ');

    }
    //end artist form
    
}
