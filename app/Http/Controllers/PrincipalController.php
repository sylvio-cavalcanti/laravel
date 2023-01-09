<?php

namespace App\Http\Controllers;

use App\MotivoContato;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal() {
        $motivo_contatos = MotivoContato::all();
        
        // site.principal -> esta acessando o arquivo 'principal.blade.php'
        return view('site.principal', ['motivo_contatos' => $motivo_contatos]);
    }
}
