<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard;
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

Route::get('/en', function () {
    return view('index');
});

Route::get('/dashboard', [dashboard::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/delete/{id}', [dashboard::class, 'destroy']);
Route::post('/store/messge',[dashboard::class, 'storemessge'])->name('store.messge');


require __DIR__ . '/auth.php';
