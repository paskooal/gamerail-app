<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editando {{$game->title}}</title>
</head>
<body>
    <form action="/games/update/{{$game->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Título</label>
        <input value="{{ old('title', $game->title) }}" id="title" name="title" type="text"><br><br>
        <label for="value">Valor</label>
        <input value="{{ old('price', $game->price) }}" id="price" name="price" type="number"><br><br>
        <label for="developer">Desenvolvedor</label>
        <input value="{{ old('developer', $game->developer) }}" id="developer" name="developer" type="text"><br><br>
        <label for="publisher">Publicadora</label>
        <input value="{{ old('publisher', $game->publisher) }}" id="publisher" name="publisher" type="text"><br><br>
        <label for="description">Descrição</label>
        <textarea id="description" name="description" type="text" placeholder="Descreva o jogo!">{{ old('description', $game->description) }}</textarea><br><br>
        <input type="submit" value="Salvar Edição">
    </form>
    <form action='/games/index'>
        @csrf
        <input type="submit" value="Voltar á Tabela">
        </form>
</body>
</html>