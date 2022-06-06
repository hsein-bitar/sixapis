<?php

use App\Http\Controllers\GetText;
use App\Http\Controllers\PalindromeController;
use App\Http\Controllers\SecondsPassed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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


Route::get('/count-palindromes', [PalindromeController::class, 'countPalindromes'])->name("countPalindromes");
Route::get('/count-seconds', [SecondsPassed::class, 'countSeconds'])->name("countSeconds");
Route::get('/get-text', [GetText::class, 'getText'])->name("getText");
