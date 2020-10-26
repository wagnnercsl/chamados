<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChamadoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

//Lista os usuários
Route::get('/users', [UserController::class, 'index']);

Route::delete('/users/{id}/delete', [UserController::class, 'delete']);

//Lista os usuários
/*Route::get('/users/{id?}', function ($id = null) {
    return view('users.index', ['id' => $id]);
});*/

//Cadastra usuário com perfil tipo "Usuário"
Route::get('/users/create', [UserController::class, 'create']);

//Cadastra usuário com perfil tipo "Usuário"
Route::post('/users/save', [UserController::class, 'save']);
//Route::post('/users/save', 'UserController@save');

Route::get('/chamados/create', [ChamadoController::class, 'create']);
Route::post('/chamados/save', [ChamadoController::class, 'save']);

//Rota de admins
Route::get('/admin', function () {
   return 'admin only';
});
