@extends('layouts.movies')

@section('title', 'Trending Movies')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4 text-center">Trending Movies</h1>

        <form method="GET" action="{{ route('trending.movies') }}" class="form-inline mb-5">
            <div class="form-group d-flex w-100">
                <label for="time_window" class="mr-2">Select Time Window:</label>
                <select name="time_window" id="time_window" class="form-control" style="border-top-right-radius: 0; border-bottom-right-radius: 0">
                    <option value="day" {{ request('time_window') == 'day' ? 'selected' : '' }}>Today</option>
                    <option value="week" {{ request('time_window') == 'week' ? 'selected' : '' }}>This Week</option>
                </select>
                <button type="submit" class="btn btn-primary w-25" style="border-top-left-radius: 0; border-bottom-left-radius: 0">Search</button>
            </div>
        </form>

        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-md-3 mb-4">
                    <div class="card border-light shadow-sm">
                        <a href="{{ route('movies.show', $movie->id) }}">
                            <img src="https://image.tmdb.org/t/p/w500{{ $movie->poster_path }}" class="card-img-top" alt="{{ $movie->title }}">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-truncate">{{ $movie->title }}</h5>
                            <p class="card-text text-muted text-truncate">{{ Str::limit($movie->overview, 100) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center">
            {{ $movies->appends(request()->query())->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
