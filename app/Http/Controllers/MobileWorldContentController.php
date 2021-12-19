<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destiny\Manifest;
use App\Destiny\MobileWorldContent;

class MobileWorldContentController extends Controller
{
    public function index()
    {
        $manifest = new Manifest;
        $version = $manifest->getVersion();

        $mobilecontentfile = new MobileWorldContent;
        $content = $mobilecontentfile->viewContentTable('DestinyClassDefinition');
        $columns = $mobilecontentfile->listTableColumns('DestinyClassDefinition');

        $table = $content->all();
        print_r($table);

        return view('mobileworldcontent.index', ['version' => $version, 'table' => $table, 'columns' => $columns]);
    }
}
