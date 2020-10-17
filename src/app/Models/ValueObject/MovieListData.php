<?php

namespace App\Models\ValueObject;

class MovieListData
{
    private $page = 1;
    /** @var MovieData[] */
    private $movieList = [];

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @param int $page
     */
    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    /**
     * @return array
     */
    public function getMovieList(): array
    {
        return $this->movieList;
    }

    /**
     * @param MovieData $movieData
     */
    public function addMovie(MovieData $movieData): void
    {
        $this->movieList[] = $movieData;
    }
}
