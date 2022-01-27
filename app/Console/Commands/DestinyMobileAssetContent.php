<?php

namespace App\Console\Commands;

use App\Destiny\Manifest;
use Illuminate\Console\Command;

class DestinyMobileAssetContent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'destiny:mobilassetcontent';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Download and extract archive of Mobile Asset Content Database';

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
        try {
            $manifest = new Manifest();
            $data = $manifest->readStoredManifest();
            $paths = $data->mobileGearAssetDataBases;
            $manifest->storeMobileAssetContent($paths[1]->path);

            return Command::SUCCESS;
        } catch (\Throwable $th) {
            echo $th;
            return Command::FAILURE;
        }
    }
}
