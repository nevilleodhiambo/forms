<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResponseController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::group(['middleware' => 'auth'], function () {


    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    //forms routes
    Route::get('/forms', [FormController::class, 'index'])->name('forms.index');
    Route::get('/forms/new', [FormController::class, 'create'])->name('forms.create');
    Route::post('/forms/new', [FormController::class, 'store'])->name('forms.store');
    Route::get('/forms/{form}', [FormController::class, 'edit'])->name('forms.edit');
    Route::patch('/forms/{form}', [FormController::class, 'update'])->name('forms.update');
    Route::delete('/forms/{form}', [FormController::class, 'destroy'])->name('forms.destroy');
    


    //responses routes
    Route::get('/responses', [ResponseController::class, 'index'])->name('responses.index');
    Route::get('/responses/new', [ResponseController::class, 'create'])->name('responses.create');
    Route::post('/responses/new', [ResponseController::class, 'store'])->name('responses.store');
    Route::get('/responses/{response}', [ResponseController::class, 'edit'])->name('responses.edit');
    Route::patch('/responses/{response}', [ResponseController::class, 'update'])->name('responses.update');
    Route::delete('/responses/{response}', [ResponseController::class, 'destroy'])->name('responses.destroy');
    

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::middleware('auth')->group(function () {
//    });

require __DIR__ . '/auth.php';
