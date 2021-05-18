<?php

use App\Http\Controllers\ccoompte;
use App\Http\Controllers\coption;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
//ROUTAGE DE CONFIG_OPTION
Route::get('/configprof', function () {return view('configprof');});
Route::get('/configsalle', function () {return view('configsalle');});
Route::get('/ajprof', function () {return view('ajprof');});
Route::get('/configgroup', function () {return view('configgroup');});
Route::get('/ajprof', function () {return view('ajprof');});
Route::get('/mail', function () {return view('mail');});
Route::get('/ajoption', function () {return view('ajoption');});
Route::get("/mesoptions",[coption::class,'index']);
Route::get("/mesoptions/{id}",[coption::class,'paginate']);
Route::get("/searchoption",[coption::class,'search']);
Route::get("/ajouteroption",[coption::class,'add']);
Route::get("/removeoption/{id}",[coption::class,'remove']);
//Route::get("/optionup/{id}",[coption::class,'show']);
Route::get("/editotion",[coption::class,'save']);
Route::get('/optionedit', function () {return view('optionedit');});
Route::get("/optionup/{id}",[coption::class,'show']);


//ROUTAGE DE CONFIG_MATIER
Route::get("/mesmatiers",[coption::class,'index']);

//ROUTAGE DE CONFIG_cpmpte
Route::get("/mescomptes",[ccoompte::class,'index']);
Route::get('/ajoutercompte', function () {return view('ajcopmte');});
//Route::post("/addcompte",[ccoompte::class,'add']);
Route::post("/addcomptee",[ccoompte::class,'aj']);
Route::get("/removecompte/{id}",[ccoompte::class,'remove']);
Route::get("/compteedite/{id}",[ccoompte::class,'show']);
Route::post("/editcompte",[ccoompte::class,'save']);
//Route::get("/edit",[ccoompte::class,'save']);
Route::get('/mail2', function () {return view('mail2');});
Route::get('/mail', function () {return view('mail');});


















