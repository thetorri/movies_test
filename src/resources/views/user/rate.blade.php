@extends('app')

@section('title', 'Favorites')

@section('content')
    <ul class="list-group">
        @foreach ($movies as $movie)
            <a href="{{ route('movie.detail', ['id' => $movie->getId()]) }}" class="text-sm text-gray-700 underline"><li class="list-group-item"><img src="https://image.tmdb.org/t/p/w500{{ $movie->getPosterPath() }}" height="80px" alt="MDN"><span class="badge">{{$movie->getVoteAverage()}}</span> {{$movie->getTitle()}}</li></a>
        @endforeach
    </ul>
@endsection
