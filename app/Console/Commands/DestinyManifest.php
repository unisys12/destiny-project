<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use App\Destiny\Manifest;

class DestinyManifest extends Command
{
    const ROOT_PATH = "https://www.bungie.net/Platform";
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'destiny:manifest';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch the most recent version of the Destiny 2 Manifest';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $manifest = new Manifest();

        $jsonResponse = $manifest->checkVersion();

        return $jsonResponse;
    }
}
