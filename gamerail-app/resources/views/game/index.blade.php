<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jogos</title>
</head>
<body>
        @if (isset($message))
            <p>{{$message}}</p>
        @else
        
        @endif
        <form action='/games/create'>
            <input type="submit" value="Voltar ao Formulário">
            </form>
            <form action='/gamestore'>
            <input type="submit" value="Voltar á Dashboard">
            </form>
        @if($totalGames > 0)
        <p>Jogos Totais: {{$totalGames}}</p>
            @foreach ($game as $game)
                <div>
                <form method="GET" action="/games/destroy/{{$game->id}}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Deletar Jogo">
                </form>
                <form method="GET" action="/games/edit/{{$game->id}}">
                    @csrf
                    <input type="submit" value="Editar Jogo">
                </form>
                <ul>
                <li>ID: {{ $game->id }}</li>
                <li>Título: {{$game->title}}</li>
                <li>Preço: {{$game->price}}R$</li>
                <li>Desenvolvedor: {{$game->developer}}</li>
                <li>Publicadora: {{$game->publisher}}</li>
                <li>Descrição: {{$game->description}}</li>
                </ul>
                <br>
               </div>
            @endforeach
            @else
            <p>Nenhum jogo encontrado</p>
            @endif
</body>
</html>