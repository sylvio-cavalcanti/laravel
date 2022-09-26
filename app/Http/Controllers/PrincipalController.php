<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal() {
        /*
            site.principal -> esta acessando o arquivo
            'principal.blade.php'
        */
        return view('site.principal');
    }
}
