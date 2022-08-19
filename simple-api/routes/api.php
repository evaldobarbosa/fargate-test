<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("/", function() {
    return response()->json(['message' => "Posso saber o que está procurando?"]);
});

Route::get("/bla", function() {
    return response()->json(['bla' => 1]);
});

Route::get("/hc", function() {
    return response()->noContent();
});

Route::get("/rand", function() {
    return response()->json(['number' => mt_rand(1111, 9999)]);
});

Route::get("/db", function() {
    \Artisan::call("migrate:refresh", ['--force' => true]);
    \Artisan::call("db:seed", ['--force' => true]);

    $user = \App\Models\User::first();

    return response()->json(['user' => $user]);
});