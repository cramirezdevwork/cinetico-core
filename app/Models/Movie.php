<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movies';
    protected $primaryKey = 'movie_id';

    /**
     * This function return the gender of the movie object
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function gender(){
        return $this->hasOne(Gender::class, 'gender_id');
    }

    public function get_movies(){
        return Movie::all();
    }

    public function get_movie_by_id($id)
    {
       $movie = Movie::Select('movies.*', DB::raw('GROUP_CONCAT(casts.name) AS cast_name'))
            ->leftjoin('movie_casts', 'movie_casts.movie_id', '=', 'movies.movie_id')
            ->leftjoin('casts', 'casts.cast_id','=', 'movie_casts.cast_id')
            ->where('movies.movie_id', '=', $id)
            ->groupBy('movies.movie_id')
            ->get();

        if (isset($movie[0])){
            return $movie[0];
        }else{
            return [
                "code" => '01',
                "message" => "La pelicula con el identificador $id no existe"
            ];
        }
    }

    public function create($request)
    {
        $movie = new Movie();
        $movie->gender_id = $request->gender_id;
        $movie->classification_id = $request->classification_id;
        $movie->name = $request->name;
        $movie->synopsis = $request->synopsis;
        $movie->release_date = $request->release_date;

        $movie->save();

        return $movie;
    }
}
