<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Listagem de Usuários</h1>
    <ul>
        <li><a href="{{ route('users.create') }}">Criar Usuário</a></li>
        <li><a href="{{ route('users.edit',['user' => 1]) }}">Editar Usuário</a></li>
        <li><a href="{{ route('users.show',['user' => 1]) }}">Visualizar Usuário</a></li>
    </ul>
</body>
</html>
