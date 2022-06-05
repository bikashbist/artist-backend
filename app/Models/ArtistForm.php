<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtistForm extends Model
{
    use HasFactory;
    protected $fillable = ['name','category','address','email','phone','image','description'];
}
