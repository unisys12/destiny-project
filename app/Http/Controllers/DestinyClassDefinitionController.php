<?php

namespace App\Http\Controllers;

use App\Models\DestinyClassDefinition;
use App\Destiny\MobileWorldContent;
use Illuminate\Http\Request;

class DestinyClassDefinitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = new MobileWorldContent;
        $json = $db->queryJsonTable('DestinyClassDefinition');
        $data = [];

        while ($row = $json->fetchArray()) {
            array_push($data, $row['json']);
        }

        dd($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DestinyClassDefinition  $destinyClassDefinition
     * @return \Illuminate\Http\Response
     */
    public function show(DestinyClassDefinition $destinyClassDefinition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DestinyClassDefinition  $destinyClassDefinition
     * @return \Illuminate\Http\Response
     */
    public function edit(DestinyClassDefinition $destinyClassDefinition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DestinyClassDefinition  $destinyClassDefinition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DestinyClassDefinition $destinyClassDefinition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DestinyClassDefinition  $destinyClassDefinition
     * @return \Illuminate\Http\Response
     */
    public function destroy(DestinyClassDefinition $destinyClassDefinition)
    {
        //
    }
}
