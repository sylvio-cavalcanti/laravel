<h3>Fornecedor.</h3>
{{-- @dd($fornecedores) --}}

Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>
@if ( !($fornecedores[0]['status'] == 'S') ) <!-- IF Executa se o retorno da condição for TRUE --> 
    Fornecedor inativo.
@endif
<br>
@unless ($fornecedores[0]['status'] == 'S') <!-- UNLESS  Executa se o retorno da condição for FALSE --> 
    Fornecedor inativo.
@endunless
