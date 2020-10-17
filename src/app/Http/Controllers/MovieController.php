<?php

namespace App\Http\Controllers;

use App\Interfaces\MovieConnectorInterface;
use App\Interfaces\MovieServiceInterface;
use App\Jobs\MovieBackgroundJob;

class MovieController extends Controller
{
    public function list(MovieConnectorInterface $movieConnector, $page = 1)
    {
        MovieBackgroundJob::dispatch();
        $maxResults = 100;
        $pageSize = 20;
        $pages = $maxResults / $pageSize;

        return view('movie.list', [
            'movieList' => $movieConnector->getPage($page),
            'page' => $page,
            'totalPages' => $pages,
        ]);
    }

    public function detail(MovieServiceInterface $movieService, $id)
    {
        return view('movie.detail', [
            'movie' => $movieService->getMovie($id)
        ]);
    }
}
