<?php

namespace App\Services;

use App\Interfaces\MovieConnectorInterface;
use App\Models\ValueObject\MovieData;
use App\Models\ValueObject\MovieListData;
use Illuminate\Support\Facades\Http;

class TheMovieDBConnectorService implements MovieConnectorInterface
{
    public function getPage($page): MovieListData
    {
        $movieList = new MovieListData();
        $movieList->setPage($page);
        $response = Http::get('https://api.themoviedb.org/3/movie/top_rated?api_key=77eecade3e27489e196d9725d9ca0aaa&language=en-US&page=' . $page);
        foreach ($response->json(['results']) as $movieRawData) {
            $movieData = $this->createMovieListData($movieRawData);
            $movieList->addMovie($movieData);
        }

        return $movieList;
    }

    public function getMovie($id): MovieData
    {
        $movieResponse = Http::get("https://api.themoviedb.org/3/movie/$id?api_key=77eecade3e27489e196d9725d9ca0aaa&language=en-US");

        return $this->createMovieData($movieResponse->json());
    }

    private function createMovieListData($data)
    {
        $movieData = new MovieData();
        $movieData->setPopularity($data['popularity']);
        $movieData->setVoteCount($data['vote_count']);
        $movieData->setVideo($data['video']);
        $movieData->setPosterPath($data['poster_path']);
        $movieData->setId($data['id']);
        $movieData->setAdult($data['adult']);
        $movieData->setBackdropPath($data['backdrop_path']);
        $movieData->setOriginalLanguage($data['original_language']);
        $movieData->setOriginalTitle($data['original_title']);
        $movieData->setTitle($data['title']);
        $movieData->setVoteAverage($data['vote_average']);
        $movieData->setOverview($data['overview']);
        $movieData->setReleaseDate($data['release_date']);

        return $movieData;
    }

    private function createMovieData($data)
    {
        $movieData = $this->createMovieListData($data);

        $movieData->setBelongsToCollection($data['belongs_to_collection']);
        $movieData->setBudget($data['budget']);
        $movieData->setImdbId($data['imdb_id']);
        $movieData->setRevenue($data['revenue']);
        $movieData->setRuntime($data['runtime']);
        $movieData->setTagline($data['tagline']);

        return $movieData;
    }
}
