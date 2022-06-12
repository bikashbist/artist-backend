<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Userartist;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $usersArtist = User::all();
        return view('admin.userlist',compact('usersArtist'));
    }
    public function search(){
        $search_text = $_GET['query'];
        $artist = Userartist::where('name','LIKE', '%'.$search_text. '%')->get();
        return view('user.search',compact('artist'));
    }
}
