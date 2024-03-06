<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\PostController;
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

//getting every page
Route::get('/', function () {
    return view('welcome');
})->name('home');
//getting the profile page
Route::get('/profile', function () {
    return view('components/layout/profile');
})->name('profile');
// getting the dashboard page
Route::get('/dashboard', function () {
    return view('components/layout/dashboard');
})->name('dashboard');

Route::get('/faq', [FAQController::class, 'index'])->name('faq.index');
Route::get('/faq/create', [FAQController::class, 'create'])->name('faq.create');
Route::post('/faq', [FAQController::class, 'store'])->name('faq.store');
Route::get('/faq/{faq}', [FAQController::class, 'show'])->name('faq.show');
Route::put('/faq/{faq}', [FAQController::class, 'update'])->name('faq.update');
Route::get('faq/{faq}/edit', [FAQController::class, 'edit'])->name('faq.edit');
Route::get('faq/{faq}/delete', [FAQController::class, 'delete'])->name('faq.delete');
Route::delete('/faq/{faq}', [FAQController::class, 'destroy'])->name('faq.destroy');

Route::get('/blog', [PostController::class, 'index'])->name('blog.index');
Route::get('/blog/create', [PostController::class, 'create'])->name('blog.create');
Route::post('/blog', [PostController::class, 'store'])->name('blog.store');
Route::get('/blog/{blog}', [PostController::class, 'show'])->name('blog.show');
Route::put('blog/{blog}', [PostController::class, 'update'])->name('blog.update');
Route::get('blog/{blog}/edit', [PostController::class, 'edit'])->name('blog.edit');
Route::get('blog/{blog}/delete', [PostController::class, 'destroy'])->name('blog.delete');
Route::delete('blog/{blog}', [PostController::class, 'delete'])->name('blog.destroy');








