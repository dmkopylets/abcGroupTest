<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ApiController;

{
    Route::get('/clicks-with-actions', [ApiController::class, 'clicksWithActions']);
    Route::get('/clicks-without-actions', [ApiController::class, 'clicksWithoutActions']);
}
