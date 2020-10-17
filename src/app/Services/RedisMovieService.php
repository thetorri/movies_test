<?php

namespace App\Services;

use App\Interfaces\MovieServiceInterface;
use App\Models\ValueObject\MovieData;
use Illuminate\Support\Facades\Redis;

class RedisMovieService implements MovieServiceInterface
{
    private $redis;

    public function __construct()
    {
        $this->redis = Redis::connection();
    }

    public function getMovie($id)
    {
        $rawData = $this->redis->get($id);
        if ($rawData == null) {
            return null;
        }

        return $this->createMovieData(json_decode($rawData, true));
    }

    public function saveMovie(MovieData $movieData)
    {
        $this->redis->set($movieData->getId(), json_encode($movieData->toArray()));
    }

    private function createMovieData($data)
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
        $movieData->setBelongsToCollection($data['belongs_to_collection']);
        $movieData->setBudget($data['budget']);
        $movieData->setImdbId($data['imdb_id']);
        $movieData->setRevenue($data['revenue']);
        $movieData->setRuntime($data['runtime']);
        $movieData->setTagline($data['tagline']);

        return $movieData;
    }
}
