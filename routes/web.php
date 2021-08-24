<?php

use App\Ismael;
use App\Galeria;
use App\Comentario;
use App\Consentido;
use App\CategoriaGrupo;
use App\CategoriaServicio;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    // $comentarios = DB::table('comentarios')->paginate(6);

    return view('index', compact('comentarios'));
});

Route::get('/about', function () {
    
    return view('about');
});

Route::get('/consentidos', function () {
    $grupo1 = Consentido::all();
    $galeria = Galeria::all();

    return view('consentidos', compact('grupo1', 'galeria'));
});

Route::get('/consentidos/{consentido}', function ($consentido) {
    $grupo1 = Consentido::findOrfail($consentido);

    return view('grupo1', compact('grupo1'));
});

Route::get('/ismael', function () {
    $grupo2 = Ismael::all();
    $galeria = Galeria::all();

    return view('ismael', compact('grupo2', 'galeria'));
});

Route::get('/ismael/{ismael}', function ($ismael) {
    $grupo2 = Ismael::findOrfail($ismael);

    return view('grupo2', compact('grupo2'));
});

Route::get('/galeria', function () {
    $galeria = Galeria::all();

    return view('galeria', compact('galeria'));
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/reservations', function () {
    $servicios = CategoriaServicio::all(['id', 'servicio']);
    $grupos = CategoriaGrupo::all(['id', 'grupo']);

    return view('reservations', compact('servicios', 'grupos'));
});

//Panel de administradores
Route::get('/admin', 'AdministradorController@index')->name('administradores.index');
//reservaciones
Route::get('/admin/reservaciones', 'ReservacionController@index')->name('reservaciones.index');
Route::get('/admin/reservaciones/create', 'ReservacionController@create')->name('reservaciones.create');
Route::post('/admin/reservaciones', 'ReservacionController@store')->name('reservaciones.store');
Route::get('/admin/reservaciones/{reservacion}/edit', 'ReservacionController@edit')->name('reservaciones.edit');
Route::put('/admin/reservaciones/{reservacion}', 'ReservacionController@update')->name('reservaciones.update');
Route::delete('/admin/reservaciones/{reservacion}', 'ReservacionController@destroy')->name('reservaciones.delete');
//Grupos musicales
//Los consentidos
Route::get('/admin/consentidos', 'ConsentidoController@index')->name('grupos.consentidos.index');
Route::get('/admin/consentidos/create', 'ConsentidoController@create')->name('grupos.consentidos.create');
Route::post('/admin/consentidos', 'ConsentidoController@store')->name('grupos.consentidos.store');
Route::get('/admin/consentidos/{consentido}/edit', 'ConsentidoController@edit')->name('grupos.consentidos.edit');
Route::put('/admin/consentidos/{consentido}', 'ConsentidoController@update')->name('grupos.consentidos.update');
Route::delete('/admin/consentidos/{consentido}', 'ConsentidoController@destroy')->name('grupos.consentidos.delete');
//Ismael y los elegidos
Route::get('/admin/ismael', 'IsmaelController@index')->name('grupos.ismael.index');
Route::get('/admin/ismael/create', 'IsmaelController@create')->name('grupos.ismael.create');
Route::post('/admin/ismael', 'IsmaelController@store')->name('grupos.ismael.store');
Route::get('/admin/ismael/{ismael}/edit', 'IsmaelController@edit')->name('grupos.ismael.edit');
Route::put('/admin/ismael/{ismael}', 'IsmaelController@update')->name('grupos.ismael.update');
Route::delete('/admin/ismael/{ismael}', 'IsmaelController@destroy')->name('grupos.ismael.delete');
//Comentarios
Route::get('/admin/comentarios', 'ComentarioController@index')->name('comentarios.index');
Route::post('/admin/comentarios/create', 'ComentarioController@store')->name('comentarios.store');
Route::delete('/admin/comentarios/{comentario}', 'ComentarioController@destroy')->name('comentarios.delete');
//Boletin
Route::get('/admin/boletin', 'BoletinController@index')->name('boletin.index');
Route::post('/boletin/create', 'BoletinController@store')->name('boletin.create');
Route::delete('/admin/boletin/{boletin}', 'BoletinController@destroy')->name('boletin.delete');
//Galeria
Route::get('/admin/galeria', 'GaleriaController@index')->name('galeria.index');
Route::get('/admin/galeria/create', 'GaleriaController@create')->name('galeria.create');
Route::post('/admin/galeria', 'GaleriaController@store')->name('galeria.store');
Route::delete('/admin/galeria/{galeria}', 'GaleriaController@destroy')->name('galeria.delete');
//Contacto
Route::post('/contact/create', 'ContactoController@store')->name('contacto.store');
Route::delete('/contact/{contacto}', 'ContactoController@destroy')->name('contacto.delete');

Auth::routes();
