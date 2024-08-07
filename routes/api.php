<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EvaluationController;
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

Route::delete('etudiants/{id}', [EtudiantController::class, "forceDelete"]);
Route::get("etudiants/trashed", [EtudiantController::class, "trashed"]);
Route::post('etudiants/{id}/restore', [EtudiantController::class, "restore"]);

Route::apiResource('evaluations', EvaluationController::class)->only('index','show','store', 'destroy');

Route::post('evaluations/{evaluation}',[EvaluationController::class,'update']);
