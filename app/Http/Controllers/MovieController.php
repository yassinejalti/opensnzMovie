<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $timeWindow = $request->get('time_window', 'day');

        $response = Http::withoutVerifying()->get("https://api.themoviedb.org/3/trending/movie/{$timeWindow}", [
            'api_key' => env('TMDB_API_KEY'),
        ]);

        $movies = $response->json()['results'];

        Movie::truncate();

        foreach ($movies as $movie) {
            Movie::create([
                'title' => $movie['title'],
                'original_title' => $movie['original_title'],
                'overview' => $movie['overview'],
                'poster_path' => $movie['poster_path'],
                'backdrop_path' => $movie['backdrop_path'],
                'media_type' => $movie['media_type'],
                'adult' => $movie['adult'],
                'original_language' => $movie['original_language'],
                'genre_ids' => json_encode($movie['genre_ids']),
                'popularity' => $movie['popularity'],
                'release_date' => $movie['release_date'],
                'video' => $movie['video'],
                'vote_average' => $movie['vote_average'],
                'vote_count' => $movie['vote_count'],
            ]);
        }

        $movies = Movie::paginate(10);

        return view('movies.index', ['movies' => $movies]);
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);

        $releaseDate = $movie->release_date ? $movie->release_date->format('Y-m-d') : 'Unknown';

        return view('movies.show', [
            'movie' => $movie,
            'releaseDate' => $releaseDate
        ]);
    }

}
