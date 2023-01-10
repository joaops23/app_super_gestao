<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedores</title>
</head>
<body>
    <h1>Fornecedores</h1>

@isset($fornecedores)
    @forelse($fornecedores as $indice => $fornecedor)
        Iteração atual: {{ $loop->iteration}} <!-- variável do blade disponivel nos laços de repetição -->
        <br>
        Fornecedor: {{$fornecedor['nome']}}
        <br>
        Status: {{$fornecedor['status']}}
        <br>

        @if($loop->first)
            Ptimeira Iteração do loop
            <br>
        @endif

        @if($loop->last)
            Última Iteração do Loop
            <br>
            Total de iterações: {{ $loop->count}}
        @endif
        <hr>

        @empty
            Não existem fornecedores cadastrados!
        @endforelse
@endisset

</body>
</html>