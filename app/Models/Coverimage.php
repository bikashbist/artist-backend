<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coverimage extends Model
{
    use HasFactory;
    protected $fillable = ['image','artistId','artist_id'];
}
