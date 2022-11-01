<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CakeController;
use App\Models\Cake;
use App\Models\Menu;
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
    return view('landing');
})->name('landing')->middleware('auth');;


Route::get('/welcome', function () {
    return view('welcome', [
        "cakes" => Cake::all(),
        "menu" => Menu::all()
    ]);
})->middleware('auth');

Route::get('/login', function () {
    return view('login', [AuthController::class, 'loginView'], [
        'title' => 'Halaman Login'
    ]);
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post(
    '/action-register',
    [AuthController::class, 'actionRegister']
);

Route::get('/login', [
    AuthController::class,
    'loginView'
])->name("login");

Route::post(
    '/action-login',
    [AuthController::class, 'actionLogin']
);

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('create', [CakeController::class, 'create'])->name('create')->middleware('auth');

Route::post('store', [CakeController::class, 'store'])->name('store')->middleware('auth');

Route::get('/show/{id}', [CakeController::class, 'show'])->name('show')->middleware('auth');

Route::get('/{id}/edit', [CakeController::class, 'edit'])->name('edit')->middleware('auth');

Route::put('/{id}', [CakeController::class, 'update'])->name('update')->middleware('auth');

Route::delete('/{id}', [CakeController::class, 'destroy'])->name('delete')->middleware('auth');
