<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ImageEditorController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])->name('admin');

Route::resource('categories', CategoryController::class)->names('admin.categories');
Route::resource('tags', TagController::class)->names('admin.tags');
Route::resource('jobs', JobController::class)->names('admin.jobs');
Route::resource('teams', TeamController::class)->names('admin.teams');
Route::resource('users', UserController::class)->names('admin.users');

//Guardar imagenes con ckeditor5
Route::post('image/upload', [ImageEditorController::class, 'upload'])->name('admin.image.upload');