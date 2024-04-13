<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SportsController;
use App\Http\Controllers\SportsMatchController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\ContestController;
use App\Http\Controllers\ParticipantsController;
use App\Http\Controllers\MrAndMsNUController;
use App\Http\Controllers\SportsAwardsController;
use App\Http\Controllers\ContestMatchController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ResultController;


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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/result', [ResultController::class, 'index'])->name('result');


Route::get('/about', function () {
    return view('guest.about');
})->name('about');

Route::get('/sports', function () {
    return view('guest.sports');
})->name('sports');



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

    // Mr and Ms NU Controller
    Route::get('/Mr&MsNU', [MrAndMsNUController::class, 'index'])->name('mr_and_ms');

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

    // Sports Match Controller
    Route::post('add_sports_match', [SportsMatchController::class, 'AddSportsMatch']);
    Route::put('update_sport_match/{id}', [SportsMatchController::class, 'UpdateSportsMatch']);
    Route::delete('delete_sport_match/{id}', [SportsMatchController::class, 'DeleteSportsMatch']);

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

    // MrAndMsNU Controller
    Route::post('add_contestants', [MrAndMsNUController::class, 'AddContestant']);
    Route::put('update_contestant/{id}', [MrAndMsNUController::class, 'UpdateContestant']);
    Route::delete('delete_contestant/{id}', [MrAndMsNUController::class, 'DeleteContestant']); 

    // Sports Awards Controller
    Route::post('add_sports_awards', [SportsAwardsController::class, 'AddSportsAwards']);
    Route::put('update_sports_awards/{id}', [SportsAwardsController::class, 'UpdateSportsAwards']);
    Route::delete('delete_sports_awards/{id}', [SportsAwardsController::class, 'DeleteSportsAwards']); 

    // Contest Match Controller
    Route::post('add_contest_match', [ContestMatchController::class, 'AddContestMatch']);
    Route::put('update_contest_match/{id}', [ContestMatchController::class, 'UpdateContestMatch']);
    Route::delete('delete_contest_match/{id}', [ContestMatchController::class, 'DeleteContestMatch']); 
});

require __DIR__.'/auth.php';
