<?php

use App\Http\Controllers\Posts;
use App\Http\Controllers\Cars;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function() {
    return view('index');
})->name('home');

Route::resource('posts', Posts::class);

Route::get('/cars', [ Cars::class, 'index' ])->name('cars.index');
Route::get('/cars/trash', [ Cars::class, 'trash' ])->name('cars.trash');
Route::get('/cars/create', [ Cars::class, 'create' ])->name('cars.create');
Route::post('/cars', [ Cars::class, 'store' ])->name('cars.store');
Route::get('/cars/{id}', [ Cars::class, 'show' ])->name('cars.show');
Route::get('/cars/{id}/edit', [ Cars::class, 'edit' ])->name('cars.edit');
Route::put('/cars/{id}/restore', [ Cars::class, 'restore' ])->name('cars.restore');
Route::put('/cars/{id}', [ Cars::class, 'update' ])->name('cars.update');
Route::delete('/cars/{id}', [ Cars::class, 'destroy']);
