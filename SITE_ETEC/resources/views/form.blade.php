<!DOCTYPE html>
<html>
<head>
    <title>Formulário</title>
</head>
<body>
    <h1>Formulário - SITE ETEC</h1>
    <form method="GET" action="{{ route('form.processa') }}">
        <label>Nome:</label>
        <input type="text" name="nome">

        <label>Idade:</label>
        <input type="number" name="idade">

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
