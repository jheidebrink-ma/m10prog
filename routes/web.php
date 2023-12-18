<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectAdminController;
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

Route::get(
    '/',
    function () {
        return view('pages.welcome');
    }
);

Route::middleware('auth')->group(
    function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    }
);

require __DIR__ . '/auth.php';

Route::get('/about', [AboutController::class, 'about'])->name('about');

Route::get('/projects', [ProjectController::class, 'index'])->name('project.index');
Route::get('/projects/add', [ProjectController::class, 'add'])->name('project.add');
Route::get('/project/{project}', [ProjectController::class, 'show'])->name('project.show');


Route::prefix('/dashboard')
     ->middleware(['auth', 'verified'])
     ->group(function () {
         Route::get(
             '/',
             function () {
                 return view('dashboard');
             })->name('dashboard');

         Route::resources(
             [
                 'project' => ProjectAdminController::class,
             ]
         );
     });