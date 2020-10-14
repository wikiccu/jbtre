<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/',[PagesController::class, 'index'])->name("home");
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/about', [PagesController::class, 'about'])->name("about");
// Route::get('/logout', [PageController::class, 'about'])->name("about");

// Route::get('/admin', [PageController::class, 'about'])->name("about");

// Route::get('/contacts', [PageController::class, 'about'])->name("about");
// Route::get('/accounts', [PageController::class, 'about'])->name("about");
// Route::get('/listing', [PageController::class, 'about'])->name("about");

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
