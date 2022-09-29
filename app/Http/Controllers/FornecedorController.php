<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 =>[  'nome' => 'Fornecedor 1', 
                    'status' => 'N',
                    'cnpj' => null
                ],
            1 =>[  
                'nome' => 'Fornecedor 1', 
                'status' => 'S'
            ]
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
