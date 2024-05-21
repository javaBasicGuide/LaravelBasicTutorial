<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KolcsonzesekController;
use App\Http\Controllers\KolcsonzokController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/getKolcsonzesek",[KolcsonzesekController::class, "getKolcsonzesek"]);
Route::get("/getOneKolcsonzes/{id}",[KolcsonzesekController::class, "getOneKolcsonzes"]);
Route::delete("/deleteKolcsonzes/{id}",[KolcsonzesekController::class, "deleteKolcsonzes"]);
Route::post("/addKolcsonzes",[KolcsonzesekController::class, "addKolcsonzes"]);
Route::put("/modifyKolcsonzes",[KolcsonzesekController::class, "modifyKolcsonzes"]);

Route::get("/getKolcsonzok",[KolcsonzokController::class, "getKolcsonzok"]);
Route::get("/getKolcsonzoId/{name}",[KolcsonzokController::class, "getKolcsonzoId"]);

