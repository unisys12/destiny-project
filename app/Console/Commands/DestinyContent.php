<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use App\Destiny\Manifest;

class GetContent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'destiny:contentfile {lang=en}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Download the latest Sqlite DB Contentfile in your language';

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
            $content_paths = get_object_vars($data->mobileWorldContentPaths);
            $options = [];

            foreach ($content_paths as $key => $value) {
                array_push($options, $key);
            }

            $this->info("If selecting more than one language choice, seperate your choices with a comma like so: 0,1,2,4");
            $lang = $this->choice("What language would you like to download for?", $options, null, null, true);

            foreach ($lang as $value) {
                if ($content_paths[$value]) {
                    $manifest->storeMobileWorldContent($value, $content_paths[$value]);
                    return 1;
                } else {
                    exit;
                }
            }
        } catch (\Throwable $th) {
            $this->info("Doesn't seem to be a Manfiest file in your public storage, so we will download that first.");
            $this->call('destiny:manifest');
            $this->info('Now that we have a Manfiest to work with, please re-run the command `destiny:contentfile` again.');
            return 1;
        }
    }
}
