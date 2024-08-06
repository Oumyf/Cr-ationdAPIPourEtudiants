<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EtudiantController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post("login", [AuthController::class, "login"]);
Route::get("logout", [AuthController::class, "logout"]);
Route::get("refresh", [AuthController::class, "refresh"]);

Route::apiResource('etudiants', EtudiantController::class)->only('index','show','store', 'destroy');

Route::post('etudiants/{etudiant}',[EtudiantController::class,'update']);