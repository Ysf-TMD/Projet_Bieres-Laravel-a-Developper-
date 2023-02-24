<?php

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


Route::group([],function()
{
    Route::get("/",[\App\Http\Controllers\BieresController::class , "index"]);
    Route::get("/accueil",[\App\Http\Controllers\BieresController::class , "index"])->name("accueil");
    Route::get("/register",[\App\Http\Controllers\BieresController::class , "register"])->name("register");
    Route::get("/apropos",[\App\Http\Controllers\BieresController::class , "apropos"]);
    Route::get("/contact",[\App\Http\Controllers\BieresController::class , "contact"]);
    Route::get("/show/{id}",[\App\Http\Controllers\BieresController::class , "show"]);
//    Route::get("/show/notation/{id}?",[\App\Http\Controllers\BieresController::class , "notation"]);
    /*Route::match(["get","post"],[\App\Http\Controllers\BieresController::class , "show"])->name("show");*/
    Route::get("/list",[\App\Http\Controllers\BieresController::class , "list"])->name("list");
    Route::match(["get","post"],"/login",[\App\Http\Controllers\BieresController::class , "login"]);
});
