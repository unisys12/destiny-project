<?php

namespace App\Destiny\DB;

class Config
{

    /**
     * Connection path to locally stored MobileWorldContent db
     */
    // public $db_path = $this->determinePathtoDB();

    /**
     * Find the locally stored MobileWorldContent db
     * and return the path to it.
     *
     * @return string
     */
    static function pathToDB(): string
    {
        $pub_path = public_path('storage/contentfiles/');
        $lang_dir = scandir($pub_path);
        $files = scandir($pub_path . "/" . $lang_dir[2]);
        $file_path = preg_grep('/(world_sql_)\w+/', $files);
        $file_path = array_values($file_path);

        return $pub_path . $lang_dir[2] . "/" . $file_path[0];
    }
}
