<?php

namespace App\Interfaces;

use App\Models\ValueObject\MovieData;
use App\Models\ValueObject\MovieListData;

interface MovieConnectorInterface
{
    public function getPage($page): MovieListData;
    public function getMovie($id): MovieData;
}
