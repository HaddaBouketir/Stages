<?php

use App\Http\Controllers\CompansController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\StagesController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\JobsController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();
Route::get('/', function () {
    return view('index');
});
Route::get('/sech', function () {
    return view('sech');
});
Route::get('/form', function () {
    return view('form');
});

Route::get('/entreprise', [App\Http\Controllers\HomeController::class, 'entreprise']);
Route::get('/etudiant', [App\Http\Controllers\HomeController::class, 'etudiant']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::resource('/students', StudentsController::class);
Route::get('/compans', [StudentsController::class, 'index']);

Route::resource('/compans', CompansController::class);
Route::resource('/messages', MessagesController::class);
Route::resource('/jobs', JobsController::class);
Route::resource('/stages', StagesController::class);
Route::get('/search', [StagesController::class, 'search']);
Route::resource('/stages', StagesController::class);
