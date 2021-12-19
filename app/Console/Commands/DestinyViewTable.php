<?php

namespace App\Console\Commands;

use App\Destiny\MobileWorldContent;
use Illuminate\Console\Command;

class DestinyViewTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'destiny:view {table?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'View a tables contents
                            {table: Name of table you want to view}
                            Ex: `php artisan destiny:view DestinyLocationDefinition`';

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

        $content = new MobileWorldContent;
        $results = $content->listTableNames();
        $list = [];

        while ($row = $results->fetchArray()) {
            array_push($list, $row['tbl_name']);
        }

        $table_section = $this->argument('table') ??
            $this->choice("Which table would you like to view?", $list);
        $table = $content->viewContentTable($table_section);

        print_r($table);


        /**
         * foreach ($table as $row) {
         *      $row['displayProperties']['name'];
         *      $row->['hash'];
         * }
         */

        return 1;
    }
}
