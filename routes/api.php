<?php

use App\Http\Controllers\GetText;
use App\Http\Controllers\PalindromeController;
use App\Http\Controllers\RandomRecipe;
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

// route that gets count of palindrome in a predefined array of words
Route::get('/count-palindromes', [PalindromeController::class, 'countPalindromes'])->name("countPalindromes");

// route that gets total seconds between now and 14 April 1732
Route::get('/count-seconds', [SecondsPassed::class, 'countSeconds'])->name("countSeconds");

// route that gets text part of response from https://icanhazdadjoke.com/slack
Route::get('/get-text', [GetText::class, 'getText'])->name("getText");

// route that gets text part of response from https://icanhazdadjoke.com/slack
Route::get('/random-recipe', [RandomRecipe::class, 'randomRecipe'])->name("randomRecipe");
