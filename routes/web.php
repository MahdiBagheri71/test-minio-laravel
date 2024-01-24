<?php

use App\Http\Controllers\TestController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', [TestController::class, 'index'])->name('test');
Route::get('/test-middleware', [TestController::class, 'index'])
    ->middleware([
        'test:Mahdi,Bagheri'
    ])
    ->name('test-middleware');
