<?php

namespace App\Destiny\DB;

use SQLite3;

class Connection extends SQLite3
{
    function __construct()
    {
        $this->open(Config::pathToDB());
    }
}
