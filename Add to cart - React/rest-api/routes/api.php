<?php

use App\Http\Controllers\Api\V1\ProdukController;
use App\Http\Controllers\Api\V1\SkillController;
use App\Http\Controllers\Api\V1\PenggunaController;
use App\Http\Controllers\Api\V1\CartController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'v1'], function () {
    Route::apiResource('skills', SkillController::class);
    Route::apiResource('produks', ProdukController::class);
    Route::apiResource('penggunas', PenggunaController::class);
    Route::apiResource('carts', CartController::class);
});

// Route::group(['prefix' => 'v1'], function() {
    
// });

// Route::group(['prefix' => 'v1'], function() {
    
// });
