<?php

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

// Route::get('/', function () { // (uri, callback)
//     return view('Olá, seja bem vindo ao curso!');
// });
// Route::get('/sobre-nos', function () {
//     return view('Sobre-nós');
// });
// Route::get('/contato', function () {
//     return view('Contato');
// });

Route::get('/', 'PrincipalController@principal');

Route::get('/sobre-nos', 'SobreNosController@sobreNos');

Route::get('/contato', 'ContatoController@contato');

/*
VERBOS HTTP:

get
post
put
patch
delete
options

*/