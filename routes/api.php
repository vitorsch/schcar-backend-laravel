<?php

use App\Http\Controllers\api\VehiclesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::apiResources([
    'vehicles' => VehiclesController::class
]);