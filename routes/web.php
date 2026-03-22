<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\StudentController;

Route::get('/students', [StudentController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
route::get('/hello',function(){
    return"hello world";
});

Route::get('/check-db', function () {
    if (Schema::hasTable('students')) {
        return ('Students table seccesfully created!');
    } else {
        return ('table not created');
    }
});

