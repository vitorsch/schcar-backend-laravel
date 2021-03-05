<?php

use App\Http\Controllers\api\VehiclesController;
use App\Http\Controllers\webservice\WebserviceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::apiResources([
    'vehicles' => VehiclesController::class
]);

Route::group(['prefix' => 'webservice'], function() {
    Route::post('cep',[WebserviceController::class, 'cep']);
});