<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Destiny\MobileWorldContent;

class DestinyContentSearch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'destiny:search {table?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Search a specfic table';

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
        $db = new MobileWorldContent;
        $table = $db->contentSearch();
        $data = [];

        return 0;
    }
}
