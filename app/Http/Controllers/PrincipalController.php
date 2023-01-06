<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal() {
        $motivo_contatos = [
            '1' => 'Dúvida',
            '2' => 'Elogio',
            '3' => 'Reclamação',
        ];
        // site.principal -> esta acessando o arquivo 'principal.blade.php'
        return view('site.principal', ['motivo_contatos' => $motivo_contatos]);
    }
}
