<?php

use App\Destiny\Enums\DestinyEnergyType;
use App\Destiny\MobileWorldContent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobileWorldContentController;
use App\Models\DestinyActivityDefinition;
use App\Models\DestinyEnergyTypeDefinition;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/mobileworldcontent', [MobileWorldContentController::class, 'index']);
Route::get('/destiny-class-definition', function () {
    $db = new MobileWorldContent;
    $json = $db->queryJsonTable('DestinyClassDefinition');
    $data = [];

    while ($row = $json->fetchArray()) {
        array_push($data, json_decode($row['json']));
    }

    foreach ($data as $row) {
        dd($row->displayProperties->name);
    }
});
Route::get('/activity', function () {
    $activity = DestinyActivityDefinition::find(1);

    return view('destiny.activity', compact('activity'));
});

Route::get('/energy_types', function () {
    $energies = DestinyEnergyTypeDefinition::all();

    return view('destiny.energy_types', compact('energies'));
});

Route::get('/energy_type/{id}', function ($id) {
    $energy = DestinyEnergyTypeDefinition::find($id);
    $name = DestinyEnergyType::from($energy->enumValue)->name;

    return view('destiny.energy_type', compact('energy', 'name'));
});
