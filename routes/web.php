<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SportsController;
use App\Http\Controllers\PlayersController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayersController;

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

Route::get('/about', function () {
    return view('guest.about');
})->name('about');

Route::get('/sports', function () {
    return view('guest.sports');
})->name('sports');

Route::get('/result', function () {
    return view('guest.result');
})->name('result');

Route::get('/gallery', function () {
    return view('guest.participants');
})->name('gallery');

Route::get('/contest', function () {
    return view('guest.contest');
})->name('contest');

Route::get('/msnu', function () {
    return view('guest.msnu');
})->name('msnu');

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

        // Players Controller
        Route::get('/players', [PlayersController::class, 'index'])->name('players');

    Route::get('/participants', function () {
        return view('cruds.participants');
    })->name('participants');


    
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

      // Player Controller
      Route::post('add_players', [PlayersController::class, 'AddPlayer']);
});

require __DIR__.'/auth.php';
