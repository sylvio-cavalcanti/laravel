<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {

        $motivo_contatos = MotivoContato::all();
        return view('site.contato', ['titulo' => 'Contato (teste)', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request) {
        // Realizar a validação dos dados do formulário recebidos no request
        $request->validate([
            // Nomes com no mínimo 3 caracteres e no máximo 40
            'nome' => 'required|min:3|max:40', 
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:2000'
        ]);
        // OBS: Usar array associativa com cada input em vez de '$resquest->all' 
        // SiteContato::create(['nome'=> $request->nome, ]);
        SiteContato::create($request->all());
    }
}



// $contato = new SiteContato();
// $contato->nome = $request->input('nome');
// $contato->telefone = $request->input('telefone');
// $contato->email = $request->input('email');
// $contato->motivo_contato = $request->input('motivo_contato');
// $contato->mensagem = $request->input('mensagem');
// // print_r($contato->getAttributes());
// $contato->save();

// $contato = new SiteContato();
// $contato->fill($request->all());
// print_r($contato->getAttributes());
// $contato->save();

// $contato = new SiteContato();
// $contato->create($request->all());