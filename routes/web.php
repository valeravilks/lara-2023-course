<?php

use App\Http\Controllers\Posts;
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
});
Route::get('/posts', [ Posts::class, 'index' ] );
Route::get('/posts/create', [ Posts::class, 'create' ] );
Route::delete('/posts/delete', [ Posts::class, 'destroy' ] );
Route::get('/posts/{id}', [ Posts::class, 'show' ] );
Route::post('/posts/create', [ Posts::class, 'store' ] );
