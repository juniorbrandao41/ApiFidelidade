<?php


use App\Http\Controllers\Api\V1\ClientsController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::prefix('v1')->group(function(){
    Route::apiResource('/clients', ClientsController::class);
});
