<?php

namespace App\Interfaces;

use App\Models\ValueObject\MovieData;

interface MovieServiceInterface
{
    public function getMovie($id);
    public function saveMovie(MovieData $movieData);
}
