<h3>Fornecedor.</h3>

@isset($fornecedores)
    @forelse($fornecedores as $indice => $fornecedor)
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{  $fornecedor['cnpj'] ?? 'Não informado.' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <hr>
        <br>
    @empty 
        <!-- Caso a variavel esteja vazia, o fluxo do loop é desviado para o bloco do 'empty' -->
        Não existem fornecedores cadastrados.
    @endforelse
@endisset