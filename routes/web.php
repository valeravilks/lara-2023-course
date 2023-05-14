<?php

use App\Http\Controllers\Posts;
use App\Http\Controllers\Autos;

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
Route::put('/posts/edit/update/{id}', [ Posts::class, 'update' ] );
Route::get('/posts/edit/{id}', [ Posts::class, 'edit' ] );
Route::delete('/posts/delete', [ Posts::class, 'destroy' ] );
Route::get('/posts/{id}', [ Posts::class, 'show' ] );
Route::post('/posts/create', [ Posts::class, 'store' ] );

Route::get('/autos', [ Autos::class, 'index' ]);
Route::get('/autos/create', [ Autos::class, 'create' ]);
Route::delete('/autos/delete', [ Autos::class, 'destroy']);
Route::put('autos/edit/update/{id}', [ Autos::class, 'update' ]);
Route::get('autos/edit/{id}', [ Autos::class, 'edit' ]);
Route::get('/autos/{id}', [ Autos::class, 'show' ]);
Route::post('/autos/create', [ Autos::class, 'store' ]);