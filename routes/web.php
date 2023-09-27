<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromptController;
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

Route::get('/prompts/{tag?}', [HomeController::class, 'home'])->name('home.index');

Route::get('/', function () {
    return redirect()->route('home.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Pages
    Route::get('/create', [HomeController::class, 'create'])->name('create.index');
    Route::get('/myprofile', [HomeController::class, 'profile'])->name('profile.index');
    // Prompt
    Route::post('/prompt/create', [PromptController::class, 'store'])->name('prompt.store');
    Route::get('/prompt/edit/{prompt}', [PromptController::class, 'edit'])->name('prompt.edit');
    Route::put('/prompt/update/{prompt}', [PromptController::class, 'update'])->name('prompt.update');
    Route::delete('/prompt/delete/{prompt}', [PromptController::class, 'delete'])->name('prompt.delete');

});

require __DIR__ . '/auth.php';