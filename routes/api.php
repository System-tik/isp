<?php

use App\Http\Controllers\ApiClient\apiController;
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

Route::get('/about',[apiController::class,'about']);
Route::get('/calendrier',[apiController::class,'calendrier']);
Route::get('/condition',[apiController::class,'condition']);
Route::get('/departement',[apiController::class,'departement']);
Route::get('/frais',[apiController::class,'frais']);
Route::get('/infrastructure',[apiController::class,'infrastructure']);
Route::get('/option',[apiController::class,'option']);
Route::get('/program',[apiController::class,'program']);
Route::get('/section',[apiController::class,'section']);
Route::get('/semestre',[apiController::class,'semestre']);
Route::get('/system',[apiController::class,'system']);
/* othes routes */
Route::get('/actus',[apiController::class,'actus']);
Route::get('/headers',[apiController::class,'headers']);
Route::get('/textes',[apiController::class,'textes']);
Route::get('/recherche',[apiController::class,'recher']);
Route::get('/comites',[apiController::class,'comites']);



