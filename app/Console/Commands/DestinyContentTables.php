<?php

namespace App\Console\Commands;

use App\Destiny\MobileWorldContent;
use Exception;
use Illuminate\Console\Command;

class DestinyContentTables extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'destiny:tables';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List all tables in the current content file';

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
        $tables = $db->contentTables();

        if (count($tables) > 0) {
            foreach ($tables as $table) {
                echo $table . "\n";
            }
            return 1;
        } else {
            throw new Exception("There was problem fetching all the tables");
            return 0;
        }
    }
}
