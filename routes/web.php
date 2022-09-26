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


Route::get('/', 'PrincipalController@principal');

Route::get('/sobre-nos', 'SobreNosController@sobreNos');

Route::get('/contato', 'ContatoController@contato');

// 'categoria' na pratica seria um select com as possibilidades
Route::get(
    '/contato/{nome}/{categoria_id}', 
    function (
        string $nome = 'Desconhecido', 
        int $categoria_id = 1 // O default é um inteiro. 1 - 'Informação' 
    ) {
        echo "Meu nome é: $nome - $categoria_id";
    }
)->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+'); 
// Primeiro Where: pelo menos um 1, valor númerico 
// Segundo Where: pelo menos um caractere de A - Z maiusculo ou minusculo


/*
VERBOS HTTP:

get
post
put
patch
delete
options

*/