<?php

namespace App\Services\SportScore\Endpoints;

use App\Services\SportScore\SportScoreService;

trait HasTeams
{
    public function Teams()
    {
        return new Teams();
    }
}
