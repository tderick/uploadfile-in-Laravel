<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilesController;

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


Route::get('/', [FilesController::class, 'index']);
Route::post('/upload-files', [FilesController::class, 'upload'])->name('fileuploads');
Route::get('/list-files', [FilesController::class, 'listfiles'])->name('listfiles');
Route::get('/downloadfile/{id}', [FilesController::class, 'downloadfile'])->name('downloadfile');
Route::delete('/deletefile/{id}', [FilesController::class, 'deletefiles'])->name('deletefile');
