<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Jogos</title>
</head>
<body>
    <form action="/games/store" method="POST">
        @csrf
        <label for="title">Título</label>
        <input id="title" name="title" type="text"><br><br>
        <label for="price">Preço</label>
        <input id="price" name="price" type="number"><br><br>
        <label for="developer">Desenvolvedor</label>
        <input id="developer" name="developer" type="text"><br><br>
        <label for="publisher">Publicadora</label>
        <input id="publisher" name="publisher" type="text"><br><br>
        <label for="description">Descrição</label>
        <textarea id="description" name="description" type="text" placeholder="Descreva o jogo!"></textarea><br><br>
        <input type="submit" value="Registrar">
    </form>
    <form action='/games/index'>
        @csrf
        <input type="submit" value="Voltar á Tabela">
        </form>
    </form>
</body>
</html>