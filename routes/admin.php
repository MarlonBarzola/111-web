<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ImageEditorController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\TagController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])->name('admin');

Route::resource('categories', CategoryController::class)->names('admin.categories');
Route::resource('tags', TagController::class)->names('admin.tags');
Route::resource('jobs', JobController::class)->names('admin.jobs');

//Guardar imagenes con ckeditor5
Route::post('image/upload', [ImageEditorController::class, 'upload'])->name('admin.image.upload');