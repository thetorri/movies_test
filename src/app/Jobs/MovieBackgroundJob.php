<?php

namespace App\Jobs;

use App\Interfaces\MovieConnectorInterface;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Redis;

class MovieBackgroundJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private const NUM_MOVIES = 100;
    private const NUM_PAGE_SIZE = 20;

    public function handle(MovieConnectorInterface $movieConnector)
    {
        $redis = Redis::connection();
        if ($redis->get('launched') == null) {
            $pages = self::NUM_MOVIES / self::NUM_PAGE_SIZE;
            $moviesId = [];
            for ($i = 1; $i <= $pages; $i++) {
                $movieDataList = $movieConnector->getPage($i);
                foreach ($movieDataList->getMovieList() as $movieData) {
                    $moviesId[] = $movieData->getId();
                }
            }
            foreach ($moviesId as $movieId) {
                MovieLoadJob::dispatch($movieId);
            }
            $redis->set('launched', true);
        }
    }
}
