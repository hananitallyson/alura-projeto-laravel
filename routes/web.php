<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

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

/*
Route::verboHTTP('/rota', function () {
    código;
});
*/

Route::get('/', function () {
    return redirect('/series');
});

Route::get('/series/criar', function () {
    return redirect('/series/create');
});

Route::resource('series', SeriesController::class);

// Route::controller(SeriesController::class)->group(function () {
//     Route::get('/series', 'index')->name('series.index');
//     Route::get('/series/create', 'create')->name('series.create');
//     Route::redirect('/series/criar', '/series/create');
//     Route::post('/series', 'store')->name('series.store');
// });

// Route::get('/series', [SeriesController::class, 'index']);
// Route::get('/series/criar', [SeriesController::class, 'create']);
// Route::post('/series/salvar', [SeriesController::class, 'store']);
