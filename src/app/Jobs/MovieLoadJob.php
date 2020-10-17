<?php

namespace App\Jobs;

use App\Interfaces\MovieConnectorInterface;
use App\Interfaces\MovieServiceInterface;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class MovieLoadJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $movieId;

    public function __construct($movieId)
    {
        $this->movieId = $movieId;
    }

    public function handle(MovieConnectorInterface $movieConnector, MovieServiceInterface $movieService)
    {
        $movieData = $movieConnector->getMovie($this->movieId);
        $movieService->saveMovie($movieData);
    }
}
