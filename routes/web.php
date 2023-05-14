<?php

use App\Http\Controllers\Posts;
use App\Http\Controllers\cars;

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
Route::post('/posts', [ Posts::class, 'store' ] );
Route::get('/posts/{id}', [ Posts::class, 'show' ] );
Route::get('/posts/{id}/edit', [ Posts::class, 'edit' ] );
Route::put('/posts/{id}', [ Posts::class, 'update' ] );
Route::delete('/posts/{id}', [ Posts::class, 'destroy' ] );

Route::get('/cars', [ Cars::class, 'index' ]);
Route::get('/cars/create', [ Cars::class, 'create' ]);
Route::post('/cars', [ Cars::class, 'store' ]);
Route::get('/cars/{id}', [ Cars::class, 'show' ]);
Route::get('/cars/{id}/edit', [ Cars::class, 'edit' ]);
Route::put('/cars/{id}', [ Cars::class, 'update' ]);
Route::delete('/cars/{id}', [ Cars::class, 'destroy']);