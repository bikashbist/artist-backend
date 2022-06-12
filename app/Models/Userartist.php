<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userartist extends Model
{
    use HasFactory;
    protected $fillable = ['artistId','artist_id','name','email','image','category'];
}
