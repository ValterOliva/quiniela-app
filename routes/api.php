<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EstadioController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\VisitanteController;
use App\Http\Controllers\PartidoController;
use App\Http\Controllers\TipoUsuarioController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api"php middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Usuario
Route::post('register',[AuthController::class ,'register']);
Route::post('login',[AuthController::class ,'login']);
Route::post('logout',[AuthController::class ,'logout']);
//Pais
Route::get('pais',[PaisController::class ,'index']);
Route::post('GuardarPais',[PaisController::class ,'store']);
Route::put('pais/{id}',[PaisController::class ,'update']);
//Equipo
Route::get('equipo',[EquipoController::class ,'index']);
Route::get('estadio',[EstadioController::class ,'index']);
Route::get('local',[LocalController::class ,'index']);
Route::get('visitante',[VisitanteController::class ,'index']);
Route::get('partido',[PartidoController::class ,'index']);
Route::get('tipousuario',[TipoUsuarioController::class ,'index']);
//Usuario Login
Route::middleware(['auth:sanctum'])->group(function(){

});