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
Route::put('/posts/edit/update/{id}', [ Posts::class, 'update' ] );
Route::get('/posts/edit/{id}', [ Posts::class, 'edit' ] );
Route::delete('/posts/delete', [ Posts::class, 'destroy' ] );
Route::get('/posts/{id}', [ Posts::class, 'show' ] );
Route::post('/posts/create', [ Posts::class, 'store' ] );

Route::get('/cars', [ Cars::class, 'index' ]);
Route::get('/cars/create', [ Cars::class, 'create' ]);
Route::delete('/cars/delete', [ Cars::class, 'destroy']);
Route::put('/cars/edit/update/{id}', [ Cars::class, 'update' ]);
Route::get('/cars/edit/{id}', [ Cars::class, 'edit' ]);
Route::get('/cars/{id}', [ Cars::class, 'show' ]);
Route::post('/cars/create', [ Cars::class, 'store' ]);