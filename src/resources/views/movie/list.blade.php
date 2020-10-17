@extends('app')

@section('title', 'Movies')

@section('content')
    <ul class="list-group">
        @foreach ($movieList->getMovieList() as $movie)
            <a href="{{ route('movie.detail', ['id' => $movie->getId()]) }}" class="text-sm text-gray-700 underline"><li class="list-group-item"><img src="https://image.tmdb.org/t/p/w500{{ $movie->getPosterPath() }}" height="80px" alt="MDN"><span class="badge">{{$movie->getVoteAverage()}}</span> {{$movie->getTitle()}}</li></a>
        @endforeach
    </ul>
    <nav aria-label="Page navigation">
        <ul class="pagination">
            @for($i=1;$i<=$totalPages;$i++)
                @if ($page == $i)
                    <li class="active"><a href="{{ route('movie.list', ['page' => $i]) }}">{{ $i }}<span class="sr-only">(current)</span></a></li>
                @else
                    <li><a href="{{ route('movie.list', ['page' => $i]) }}">{{ $i }}</a></li>
                @endif
            @endfor
        </ul>
    </nav>
@endsection
