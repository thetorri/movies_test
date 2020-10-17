<?php

namespace App\Models\ValueObject;

class MovieData
{
    private $popularity;
    private $vote_count;
    private $video;
    private $poster_path;
    private $id;
    private $adult;
    private $backdrop_path;
    private $original_language;
    private $original_title;
    private $title;
    private $vote_average;
    private $overview;
    private $release_date;

    private $belongs_to_collection;
    private $budget;
    private $imdb_id;
    private $revenue;
    private $runtime;
    private $tagline;

    public function toArray()
    {
        return [
            'popularity' => $this->popularity,
            'vote_count' => $this->vote_count,
            'video' => $this->video,
            'poster_path' => $this->poster_path,
            'id' => $this->id,
            'adult' => $this->adult,
            'backdrop_path' => $this->backdrop_path,
            'original_language' => $this->original_language,
            'original_title' => $this->original_title,
            'title' => $this->title,
            'vote_average' => $this->vote_average,
            'overview' => $this->overview,
            'release_date' => $this->release_date,
            'belongs_to_collection' => $this->belongs_to_collection,
            'budget' => $this->budget,
            'imdb_id' => $this->imdb_id,
            'revenue' => $this->revenue,
            'runtime' => $this->runtime,
            'tagline' => $this->tagline,
        ];
    }

    /**
     * @return mixed
     */
    public function getPopularity()
    {
        return $this->popularity;
    }

    /**
     * @param mixed $popularity
     */
    public function setPopularity($popularity): void
    {
        $this->popularity = $popularity;
    }

    /**
     * @return mixed
     */
    public function getVoteCount()
    {
        return $this->vote_count;
    }

    /**
     * @param mixed $vote_count
     */
    public function setVoteCount($vote_count): void
    {
        $this->vote_count = $vote_count;
    }

    /**
     * @return mixed
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param mixed $video
     */
    public function setVideo($video): void
    {
        $this->video = $video;
    }

    /**
     * @return mixed
     */
    public function getPosterPath()
    {
        return $this->poster_path;
    }

    /**
     * @param mixed $poster_path
     */
    public function setPosterPath($poster_path): void
    {
        $this->poster_path = $poster_path;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAdult()
    {
        return $this->adult;
    }

    /**
     * @param mixed $adult
     */
    public function setAdult($adult): void
    {
        $this->adult = $adult;
    }

    /**
     * @return mixed
     */
    public function getBackdropPath()
    {
        return $this->backdrop_path;
    }

    /**
     * @param mixed $backdrop_path
     */
    public function setBackdropPath($backdrop_path): void
    {
        $this->backdrop_path = $backdrop_path;
    }

    /**
     * @return mixed
     */
    public function getOriginalLanguage()
    {
        return $this->original_language;
    }

    /**
     * @param mixed $original_language
     */
    public function setOriginalLanguage($original_language): void
    {
        $this->original_language = $original_language;
    }

    /**
     * @return mixed
     */
    public function getOriginalTitle()
    {
        return $this->original_title;
    }

    /**
     * @param mixed $original_title
     */
    public function setOriginalTitle($original_title): void
    {
        $this->original_title = $original_title;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getVoteAverage()
    {
        return $this->vote_average;
    }

    /**
     * @param mixed $vote_average
     */
    public function setVoteAverage($vote_average): void
    {
        $this->vote_average = $vote_average;
    }

    /**
     * @return mixed
     */
    public function getOverview()
    {
        return $this->overview;
    }

    /**
     * @param mixed $overview
     */
    public function setOverview($overview): void
    {
        $this->overview = $overview;
    }

    /**
     * @return mixed
     */
    public function getReleaseDate()
    {
        return $this->release_date;
    }

    /**
     * @param mixed $release_date
     */
    public function setReleaseDate($release_date): void
    {
        $this->release_date = $release_date;
    }

    /**
     * @return mixed
     */
    public function getBelongsToCollection()
    {
        return $this->belongs_to_collection;
    }

    /**
     * @param mixed $belongs_to_collection
     */
    public function setBelongsToCollection($belongs_to_collection): void
    {
        $this->belongs_to_collection = $belongs_to_collection;
    }

    /**
     * @return mixed
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * @param mixed $budget
     */
    public function setBudget($budget): void
    {
        $this->budget = $budget;
    }

    /**
     * @return mixed
     */
    public function getImdbId()
    {
        return $this->imdb_id;
    }

    /**
     * @param mixed $imdb_id
     */
    public function setImdbId($imdb_id): void
    {
        $this->imdb_id = $imdb_id;
    }

    /**
     * @return mixed
     */
    public function getRevenue()
    {
        return $this->revenue;
    }

    /**
     * @param mixed $revenue
     */
    public function setRevenue($revenue): void
    {
        $this->revenue = $revenue;
    }

    /**
     * @return mixed
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * @param mixed $runtime
     */
    public function setRuntime($runtime): void
    {
        $this->runtime = $runtime;
    }

    /**
     * @return mixed
     */
    public function getTagline()
    {
        return $this->tagline;
    }

    /**
     * @param mixed $tagline
     */
    public function setTagline($tagline): void
    {
        $this->tagline = $tagline;
    }
}
