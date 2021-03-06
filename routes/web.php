<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\checklistController;

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

Route::get('/', function(){
    return view('layouts.master');
});

Route::get('/welcome', function(){
    return view('welcome');
});

Route::get('/dashboard', function(){
    return view('layouts.master');
});

Route::get('/item', function(){
    return view('layouts.item');
});

// Route::get('/', [checklistController::class,'index']);
// Route::get('/checklist/{{id}}/edit', [checklistController::class,'edit']);
// Route::put('/checklist/{{id}}', [checklistController::class,'update']);


