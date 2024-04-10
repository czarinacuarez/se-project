<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SportsController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\ContestController;
use App\Http\Controllers\ParticipantsController;

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

    // Participants Controller
    Route::get('/participants', [ParticipantsController::class, 'index'])->name('participants');

    // Contest Controller
    Route::get('/contest_match', [ContestController::class, 'index'])->name('contest_match');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// crud route
Route::middleware('auth')->group(function () {
    // School Controller
    Route::post('add_school', [SchoolController::class, 'AddSchool']);
    Route::put('update_school/{id}', [SchoolController::class, 'UpdateSchool']);
    Route::delete('delete_school/{id}', [SchoolController::class, 'DeleteSchool']);

    // Program Controller
    Route::post('add_program', [ProgramController::class, 'AddProgram']);
    Route::put('update_program/{id}', [ProgramController::class, 'UpdateProgram']);
    Route::delete('delete_program/{id}', [ProgramController::class, 'DeleteProgram']);

    // Sports Controller
    Route::post('add_sports', [SportsController::class, 'AddSports']);
    Route::put('update_sport_category/{id}', [SportsController::class, 'UpdateSportsCategory']);
    Route::delete('delete_sport_category/{id}', [SportsController::class, 'DeleteSportsCategory']);

    // Player Controller
    Route::post('add_players', [PlayersController::class, 'AddPlayer']);
    Route::put('update_player/{id}', [PlayersController::class, 'UpdatePlayer']);
    Route::delete('delete_player/{id}', [PlayersController::class, 'DeletePlayer']); 

    // Contest Controller
    Route::post('add_contest', [ContestController::class, 'AddContest']);
    Route::put('update_contest_category/{id}', [ContestController::class, 'UpdateContestCategory']);
    Route::delete('delete_contest/{id}', [ContestController::class, 'DeleteContest']); 

    // Participants Controller
    Route::post('add_participants', [ParticipantsController::class, 'AddParticipants']);
    Route::put('update_participants/{id}', [ParticipantsController::class, 'UpdateParticipants']);
    Route::delete('delete_participants/{id}', [ParticipantsController::class, 'DeleteParticipants']); 
});

require __DIR__.'/auth.php';
