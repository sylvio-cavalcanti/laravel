<h3>Fornecedor.</h3>

@php
    /*
        if(empty($variavel)) {
            Se a variavel estiver vazia/sem valor, o método empty retorna TRUE.
            No PHP uam  variável está vazia quando ela é atribuído o seguinte os valores:
            - ''
            - 0
            - 0.0
            - '0'
            - null
            - false
            - array(), um array vazio
            - $var, variavel declarada mas sem atribuição de um valor
        }  
    */
@endphp

@isset($fornecedores) <!-- So entra nesse bloco de codigo, se a variavel existe --> 
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    @isset($fornecedores[0]['cnpj']) <!-- Verifica se o índice existe --> 
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
        @empty($fornecedores[0]['cnpj'])
            - Vazio
        @endempty

    @endisset
@endisset