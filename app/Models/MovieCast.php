<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieCast extends Model
{
    use HasFactory;

    protected $table = 'movie_cast';
    protected $primaryKey = 'movie_cast_id';
    public $timestamps = false;

}
