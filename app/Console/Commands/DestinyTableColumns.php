<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Destiny\MobileWorldContent;

class DestinyTableColumns extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'destiny:tablecolumns {table?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Returns & displays the avaliable columns of a table. If no table is passed, a list of choices will be displayed for you.';

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
        $results = $db->listTableNames();

        $list = [];

        while ($row = $results->fetchArray()) {
            array_push($list, $row['tbl_name']);
        }

        $table = $this->argument('table') ??
            $this->choice("Which table would you like to view?", $list);

        $columns = $db->listTableColumns($table);

        print_r($columns);

        return 1;
    }
}
