<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{route('cadastro-produto')}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Nome do Produto</label>
        <input type="text" placeholder="Nome do Produto" name="nome_item">
        <br><br>
        <label for="">Descricao do Produto</label>
        <input type="text" placeholder="Descricao do Produto" name="descricao_item">
        <br><br>
        <label for="">Tipo do produto</label>
        <input type="text" placeholder="Tipo do produto" name="tipo_item">
        <br><br>
        <label for="">Quantidade em Estoque</label>
        <input type="text" placeholder="Quantidade em Estoque" name="preco_item">
        <br><br>
        <button>Enviar</button>

    </form>

</body>
</html>
