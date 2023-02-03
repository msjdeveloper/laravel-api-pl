<?php

namespace App\Services\SportScore\Endpoints;

use App\Services\SportScore\SportScoreService;
use App\Services\SportScore\Entities\Sport;
use Illuminate\Support\Collection;

class Sports extends BaseEndpoint
{

    public function get(): Collection
    {
        return $this->transform(
            $this->service
                ->api
                ->get("/sports")
                ->json("data"),
            Sport::class
        );
    }

}
