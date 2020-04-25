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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ControllerMustika@index');
Route::get('/financial', 'ControllerMustika@cretefinancial');
Route::post('/simpanfinancial', 'ControllerMustika@SaveFinancial');
Route::post('/simpanfinancialdraft', 'ControllerMustika@simpandrarf');
Route::get('/draft', 'ControllerMustika@draftfinancial');
Route::get('/viewdraft/{id_financial}', 'ControllerMustika@viewdraft');
Route::post('/draftsimpan/{id_financial}', 'ControllerMustika@updatedraft');
Route::post('/draftprogres/{id_financial}', 'ControllerMustika@simpanDrafprogres');
Route::get('/draftdelete/{id_financial}', 'ControllerMustika@hapusDraft');
Route::get('/inprogres', 'ControllerMustika@inprogres');
Route::get('/spal/{id_finanacial}', 'ControllerMustika@spal');
Route::post('/simpanspal', 'ControllerMustika@simpanspal');
Route::get('/viewspal/{id_financial}', 'ControllerMustika@viewSpal');
Route::get('/deletespal/{id_financial}', 'ControllerMustika@hapusspal');
Route::get('/invoice/{id_financial}', 'ControllerMustika@invoice');

Route::get('/realcost', 'ControllerMustika@craterealcost');
Route::get('/simpanrealcost', 'ControllerMustika@simpanrealcost');
Route::get('/simpanrealcostdraft', 'ControllerMustika@simpanDraft');
Route::get('/realcostdraft/{id_realcost}', 'ControllerMustika@viewRealCost');
Route::get('/realcostdraftsimpan', 'ControllerMustika@simpandraftRealcost');
Route::get('/realcostdraftsimpandratf', 'ControllerMustika@updaterealcostdraft');
Route::get('/deleterealcost/{id_realcost}', 'ControllerMustika@deleterealcost');
Route::get('/dtartrealcost', 'ControllerMustika@draftrealcost');
Route::get('/history', 'ControllerMustika@histori');
