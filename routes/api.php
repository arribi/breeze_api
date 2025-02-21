<?php

use App\Http\Controllers\AsociationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Orion\Facades\Orion;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

// Orion por defecto protege las rutas de la API,
// pero si deseas deshabilitar la protección de autorización, puedes hacerlo con el método `disableAuthorization`:
Route::group(['as' => 'api.'], function () {
    Orion::resource('asociations', AsociationController::class);
});

// Si protego con sanctum breeze redirigie a login (post)
// Route::apiResource('asociations', AsociationController::class)->middleware('auth:sanctum');
