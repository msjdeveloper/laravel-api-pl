<?php

namespace App\Services\SportScore;

use App\Services\SportScore\Endpoints\HasSports;
use App\Services\SportScore\Endpoints\HasTeams;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

/**
 * SportScore Rapid Api Service
 * https://rapidapi.com/tipsters/api/sportscore1/
 */
class SportScoreService
{
    use HasSports, HasTeams;

    public PendingRequest $api;

    public function __construct()
    {
        $this->api = Http::withHeaders([
            "X-Rapidapi-Key" => env("RAPID_API_KEY"),
            "X-Rapidapi-Host" => env("RAPID_API_HOST")
        ])->baseUrl(env("RAPID_API_BASE_URL"));
    }
}
