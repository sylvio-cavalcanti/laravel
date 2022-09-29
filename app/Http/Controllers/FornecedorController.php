<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 =>[  'nome' => 'Fornecedor 1', 
                    'status' => 'N',
                    'cnpj' => '5844'
                ],
            1 =>[  
                'nome' => 'Fornecedor 1', 
                'status' => 'S'
            ]
        ];
        echo isset($fornecedores[0]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado.';

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
