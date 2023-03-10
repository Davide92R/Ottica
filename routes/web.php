<?php

use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/visiteOptometriche', [PublicController::class, 'visiteOptometriche'])->name('visiteOptometriche');

Route::get('/Ecografie', [PublicController::class, 'Ecografie'])->name('Ecografie');

Route::get('/OCT', [PublicController::class, 'OCT'])->name('OCT');

Route::get('/chirurgiaEstetica', [PublicController::class, 'chirurgiaEstetica'])->name('chirurgiaEstetica');

Route::get('/contatti',[PublicController::class, 'contatti'])->name('contatti');

Route::post('/submit', [PublicController::class, 'submit'])->name('submit');

Route::get('/redirectMail', [PublicController::class, 'redirectMail'])->name('redirectMail');