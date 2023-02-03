<?php

namespace App\Console\Commands;

use App\Services\SportScore\SportScoreService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class Playground extends Command
{

    protected $signature = 'play';

    protected $description = 'Playground command';

    public function handle()
    {
        $service = new SportScoreService();
        // $json = $service
        //     ->sports()
        //     ->get();

        // $a = $json->first();
        // dd($a->name);

        $json = $service
            ->teams()
            ->fromSport(1)
            ->get();

        dd($json);

        return Command::SUCCESS;
    }
}
