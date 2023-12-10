<?php

use App\Http\Controllers\AgentApiController;
use App\Http\Controllers\TicketApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::prefix("v1")->group(function (){

    Route::middleware('auth:agents')->group(function(){
        Route::get('/agent-dashboard',[AgentApiController::class]);
        Route::apiResource('tickets',TicketApiController::class);
    });
    Route::middleware('auth:queues')->group(function(){
        Route::get('/queue-dashboard',[AgentApiController::class]);
        Route::apiResource('tickets',TicketApiController::class);
    });
});

