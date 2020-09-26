<?php

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


Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::resource('costo','costoController');

Route::resource('usuario','usuariosController');

//Rutas de jorgue==========================================

//Patient related
Route::get("/createPatient", "secretaryController@createpatient");
Route::get("/editp/{cedula}", "secretaryController@editp");
Route::get("/deletep/{cedula}", "secretaryController@deletep");
Route::post("/editedp", "secretaryController@editedp");
Route::post("/createp", "secretaryController@createp" );
//date related
Route::post("/createc", "secretaryController@createc");
Route::get("/cites", "secretaryController@Cites");
Route::get("/editc/{id}", "secretaryController@editc");
Route::post("/editedc", "secretaryController@editedc");
Route::get("/deletec/{id}", "secretaryController@deletec");
Route::get("/datecalendar", "secretaryController@datecalendar");
// Bithdays per month
Route::get("/birthdays","secretarycontroller@birthdays");
Route::post("/getbirthdays","secretarycontroller@getbirthdays");
// Pays
Route::get("/paydates", "secretarycontroller@paydates");
Route::post("/payedd", "secretarycontroller@payedd");
// System Report
Route::get("/systemreport", "secretarycontroller@systemreport");
Route::resource('paciente','pacienteController');
Route::resource('citasEdit','citasEditController');
//rutas de Luis
Route::resource('visitas','visitasController');
Route::get("/createVisita", "MedicoController@createVisita");
Route::post("/createv", "MedicoController@createv");
Route::get("/editv/{ID}", "MedicoController@editv");
Route::put("/editedv", "MedicoController@editedv")->name('edit');
Route::get("/deletev/{ID}", "MedicoController@deletev");
Route::get('/calendarcites', "MedicoController@calendarcites" );
Route::get('/printrecet', "MedicoController@printrecet" );
Route::get('/imprimirCita', "MedicoController@imprimirCita" );
