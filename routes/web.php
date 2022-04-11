<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\LessonController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/faculty', function () {
    return view('/faculty');
});

Route::get('/classes', function () {
    return view('/classes');
});

Route::get('/adult-classes', function () {
    return view('/adult-classes');
});

//Route::get('/policies', function () {
//    return view('/policies');
//});

Route::get('/show-team', function () {
    return view('/show-team');
});

//Route::get('/showcase', function () {
//    return view('/showcase');
//});

Route::get('/faqs', function () {
    return view('/faqs');
});

//Route::get('/media', function () {
//    return view('/media');
//});

Route::get('/summer', function () {
    return view('/summer');
});

//Route::get('/contact', function () {
//    return view('/contact');
//});

Route::resource('lessons', LessonController::class);
Route::resource('contents', ContentController::class);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
