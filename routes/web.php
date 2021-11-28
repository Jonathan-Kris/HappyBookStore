<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Models\Detail;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/book/{category_id}', [HomeController::class, 'viewCategory'])->name('view.categories');

Route::get('/detail/{book_id}', [DetailController::class, 'viewDetail'])->name('view.detail');

Route::get('/contact', [ContactController::class, 'viewContact']);


