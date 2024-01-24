<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\FamousAuthor;
use App\Http\Controllers\InputRating;
use App\Http\Controllers\ListBook;
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

Route::get('/', ListBook::class)->name('listBook');
Route::post('/', [ListBook::class, 'filter'])->name('listBook');
Route::post('/', [ListBook::class, 'search'])->name('search');
Route::get('/famous', FamousAuthor::class)->name('famousAuthor');
Route::get('/rating', InputRating::class)->name('inputRating');
Route::post('/rating', [InputRating::class, 'submit'])->name('inputRating');


