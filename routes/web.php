<?php

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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/projects', [App\Http\Controllers\ProjectsController::class, 'index'])->name('projects');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/contacts', [App\Http\Controllers\ContactsController::class, 'index'])->name('contacts');
Route::Post('/message', [App\Http\Controllers\MessageController::class, 'create'])->name('message.create');
Route::get('/thanks', [App\Http\Controllers\MessageController::class, 'thanks'])->name('message.thanks');
