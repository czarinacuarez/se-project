<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SportsController;
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
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // School Controller
    Route::get('/school_program', [SchoolController::class, 'index'])->name('school_program');

    // Program Controller
    Route::get('/program', [ProgramController::class, 'index'])->name('programs');

    // Sports Controller
    Route::get('/sports_match', [SportsController::class, 'index'])->name('sports_match');

    Route::get('/participants', function () {
        return view('cruds.participants');
    })->name('participants');

    Route::get('/players', function () {
        return view('cruds.players');
    })->name('players');
    
    Route::get('/dance_match', function () {
        return view('cruds.dance_match');
    })->name('dance_match');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// crud route
Route::middleware('auth')->group(function () {
    // School Controller
    Route::post('add_school', [SchoolController::class, 'AddSchool']);
    
    // Program Controller
    Route::post('add_program', [ProgramController::class, 'AddProgram']);

    // Sports Controller
    Route::post('add_sports', [SportsController::class, 'AddSports']);
});

require __DIR__.'/auth.php';
