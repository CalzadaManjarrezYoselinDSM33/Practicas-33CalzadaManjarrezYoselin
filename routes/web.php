<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SistemaController;

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

//Route::get('/', function () {return view('welcome');});





//--------------------------------------------Usuario----------------------------------------------
Route::name('lista_usuario')->get('usuarios',[SistemaController::class,'usuarios']);
Route::name('formu')->get('formu',[SistemaController::class,'altau']);
Route::name('detalle/{id_usuario}')->get('detalle/{id_usuario}',[SistemaController::class,'detalle']);
Route::name('salvar/{id_usuario}')->put('salvar/{id_usuario}',[SistemaController::class,'salvar']);
Route::name('editar')->get('editar/{id_usuario}',[SistemaController::class,'editar']);
Route::name('borrar/{id_usuario}')->get('borrar/{id_usuario}',[SistemaController::class,'borrar']);
Route::name('registro')->post('registro',[SistemaController::class,'registro']);
//------------------------------------------Producto------------------------------------------------
Route::name('lista_producto')->get('/',[SistemaController::class,'producto']);
Route::name('formp')->get('formp',[SistemaController::class,'altap']);
Route::name('detallepro/{id_productos}')->get('detallepro/{id_productos}',[SistemaController::class,'detallepro']);
Route::name('salvarpro/{id_productos}')->put('salvarpro/{id_productos}',[SistemaController::class,'salvarpro']);
Route::name('editarpro')->get('editarpro/{id_productos}',[SistemaController::class,'editarpro']);
Route::name('borrarpro/{id_productos}')->get('borrarpro/{id_productos}',[SistemaController::class,'borrarpro']);
Route::name('registropro')->post('registropro',[SistemaController::class,'registropro']);
//------------------------------------------tienda--------------------------------------------------
Route::name('lista_tiendas')->get('tiendas',[SistemaController::class,'tiendas']);
Route::name('formtienda')->get('formtienda',[SistemaController::class,'altati']);
Route::name('detalletien/{id_tienda}')->get('detalletien/{id_tienda}',[SistemaController::class,'detalletien']);
Route::name('salvartien/{id_tienda}')->put('salvartien/{id_tienda}',[SistemaController::class,'salvartien']);
Route::name('editartien')->get('editartien/{id_tienda}',[SistemaController::class,'editartien']);
Route::name('borrartien/{id_tienda}')->get('borrartien/{id_tienda}',[SistemaController::class,'borrartien']);
Route::name('registrotien')->post('registrotien',[SistemaController::class,'registrotien']);
//-----------------------------------------nivel----------------------------------------------------
Route::name('lista_nivel')->get('nivel',[SistemaController::class,'nivels']);
Route::name('formni')->get('formni',[SistemaController::class,'altani']);
Route::name('detalleni/{id_nivel}')->get('detalleni/{id_nivel}',[SistemaController::class,'detalleni']);
Route::name('salvarni/{id_nivel}')->put('salvarni/{id_nivel}',[SistemaController::class,'salvarni']);
Route::name('editarni')->get('editarni/{id_nivel}',[SistemaController::class,'editarni']);
Route::name('borrarni/{id_nivel}')->get('borrarni/{id_nivel}',[SistemaController::class,'borrarni']);
Route::name('registroni')->post('registroni',[SistemaController::class,'registroni']);
