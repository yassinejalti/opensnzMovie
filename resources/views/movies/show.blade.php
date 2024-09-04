@extends('layouts.movies')

@section('title', $movie->title)

@section('content')
    <div class="container mt-4">
        <h1 class="text-center mb-4">{{ $movie->title }}</h1>

        <div class="row">
            <div class="col-md-4 mb-4">
                <img src="https://image.tmdb.org/t/p/w500{{ $movie->poster_path }}"
                     alt="{{ $movie->title }}"
                     class="img-fluid rounded shadow-sm">
            </div>
            <div class="col-md-8">
                <h2 class="mb-3">Movie Details</h2>
                <p><strong>Original Title:</strong> {{ $movie->original_title }}</p>
                <p><strong>Overview:</strong> {{ $movie->overview }}</p>
                <p><strong>Release Date:</strong> {{ $releaseDate ?? 'Unknown' }}</p>
                <p><strong>Vote Average:</strong> {{ $movie->vote_average }}</p>
                <p><strong>Popularity:</strong> {{ $movie->popularity }}</p>
                <p><strong>Original Language:</strong> {{ $movie->original_language }}</p>

                <div class="mt-4">
                    <a href="{{ route('trending.movies') }}" class="btn btn-primary">Back to Trending Movies</a>
                </div>
            </div>
        </div>
        <div class="my-4">
            <img src="https://image.tmdb.org/t/p/w500{{ $movie->backdrop_path }}"
                 alt="{{ $movie->title }} Backdrop"
                 class="img-fluid rounded shadow-sm w-100">
        </div>
    </div>
@endsection
