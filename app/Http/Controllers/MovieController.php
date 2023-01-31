<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Returns all the movies from the database
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function get_movies()
    {
        $movie = new Movie();

        return $movie->get_movies();
    }

    /**
     * Gets a movie based on the id
     *
     * @param Request $request
     * @return string[]
     */
    public function get_movie(Request $request)
    {
        $movie = new Movie();

        return $movie->get_movie_by_id($request->id);
    }


    /**
     * Creates new movie using the request, though validation
     *
     * @param CreateMovieRequest $request
     * @return Movie
     */
    public function create_movie(CreateMovieRequest $request)
    {
        $date = date_create($request->release_date);
        $request->release_date = date_format($date, 'Y-m-d');
        $movie = new Movie();

        return $movie->create($request);
    }
}
