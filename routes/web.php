<?php

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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/another_home', function () {
//     return view('another_home');
// });

// Route::get('/education', function () {
//     return view('education');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/projects', function () {
//     return view('projects');
// });

// Route::get('/halo/{nama?}', function ($nama = 'tanpa nama') {
//     return '<h1>halo nama saya ' . $nama . '</h1>';
// });

Route::resource('posts','App\Http\Controllers\PostController');
Route::resource('Views','App\Http\Controllers\ViewsController');


