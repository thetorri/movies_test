@extends('app')

@section('title', 'Movies')

@section('content')
    <div class="jumbotron">
        <div class="container">
            @if ($movie == null)
                <div class="row">
                    <div class="col-xs-12">
                        <h1>Not available</h1>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-xs-4">
                        <img src="https://image.tmdb.org/t/p/w500{{ $movie->getPosterPath() }}" height="400px" alt="MDN">
                    </div>
                    <div class="col-xs-8">
                        <div class="row">
                            <h3>{{ $movie->getTitle() }}</h3>
                            <dl>
                                <dt>Release Date</dt>
                                <dd>{{ $movie->getReleaseDate() }}</dd>

                                <dt>Vote Average</dt>
                                <dd>{{ $movie->getVoteAverage() }}</dd>

                                <dt>Vote Count</dt>
                                <dd>{{ $movie->getVoteCount() }}</dd>

                                <dt>Overview</dt>
                                <dd>{{ $movie->getOverview() }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
