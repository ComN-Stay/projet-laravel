<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\LibraryController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/gender', [GenderController::class, 'list']);
Route::get('/gender/create', [GenderController::class, 'create']);
Route::post('/gender/create', [GenderController::class, 'create']);
Route::get('/gender/show/{id}', [GenderController::class, 'show']);
Route::get('/gender/update/{id}', [GenderController::class, 'update']);
Route::post('/gender/update', [GenderController::class, 'update']);
Route::get('/gender/delete/{id}', [GenderController::class, 'delete']);

Route::get('/artist', [ArtistController::class, 'list']);
Route::get('/artist/create', [ArtistController::class, 'create']);
Route::post('/artist/create', [ArtistController::class, 'create']);
Route::get('/artist/show/{id}', [ArtistController::class, 'show']);
Route::get('/artist/update/{id}', [ArtistController::class, 'update']);
Route::post('/artist/update', [ArtistController::class, 'update']);
Route::get('/artist/delete/{id}', [ArtistController::class, 'delete']);

Route::get('/library', [LibraryController::class, 'list']);
Route::get('/library/create', [LibraryController::class, 'create']);
Route::post('/library/create', [LibraryController::class, 'create']);
Route::get('/library/show/{id}', [LibraryController::class, 'show']);
Route::get('/library/update/{id}', [LibraryController::class, 'update']);
Route::post('/library/update', [LibraryController::class, 'update']);
Route::get('/library/delete/{id}', [LibraryController::class, 'delete']);
