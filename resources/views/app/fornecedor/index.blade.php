<h3>Fornecedor.</h3>

@php
   
@endphp

@isset($fornecedores) <!-- So entra nesse bloco de codigo, se a variavel existe --> 
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    CNPJ: {{  $fornecedores[0]['cnpj'] ?? 'Não informado.' }}
@endisset