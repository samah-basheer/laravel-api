<?php

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

Route::get('/palindromes', [TestController::class, 'palindromeCount'])->name("palindrome");
Route::get('/seconds', [TestController::class, 'seconds'])->name("seconds");
Route::get('/api-slack', [TestController::class, 'apiSlack'])->name("api-slack");
Route::get('/beer-recipe', [TestController::class, 'beerRecipe'])->name("beer-recipe");
Route::get('/student-group', [TestController::class, 'studentGroup'])->name("student-group");
Route::get('/nominee', [TestController::class, 'nominee'])->name("nominee");
