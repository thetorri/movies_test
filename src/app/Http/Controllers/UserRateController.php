<?php

namespace App\Http\Controllers;

use App\Interfaces\MovieServiceInterface;
use App\Models\User;
use App\Models\UserRate;
use App\Models\ValueObject\MovieData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserRateController extends Controller
{
    public function list(MovieServiceInterface $movieService)
    {
        $movies = [];
        $rates = UserRate::where('user_id', Auth::user()->id)->orderBy('rate', 'DESC')->get();
        /** @var User $userRate */
        foreach ($rates as $userRate) {
            $movies[] = $movieService->getMovie($userRate->movie_id);
        }
        return view('user.rate', [
            'movies' => $movies
        ]);
    }

    public function add(MovieServiceInterface $movieService, $movieId)
    {
        /** @var MovieData $movie */
        $movie = $movieService->getMovie($movieId);
        $rate = new UserRate();
        $rate->rate = $movie->getVoteAverage();
        $rate->movie_id = $movieId;
        $rate->user()->associate(Auth::user());
        $rate->save();

        return Redirect::route('movie.detail', [
            'id' => $movieId
        ]);
    }
}
