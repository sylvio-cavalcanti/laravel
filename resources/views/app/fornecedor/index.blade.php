<h3>Fornecedor.</h3>

@php
    /*
        if(isset($variavel)) {
            // Exemplo de uso do método isset do php
            // o isset retorna true se a var. estiver definida
        }  
    */
@endphp

@isset($fornecedores) <!-- So entra nesse bloco de codigo, se a variavel existe --> 
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
    @isset($fornecedores[1]['cnpj']) <!-- Verifica se o índice existe --> 
        CNPJ: {{ $fornecedores[1]['cnpj'] }}
    @endisset
@endisset