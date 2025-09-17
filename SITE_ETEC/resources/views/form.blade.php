<!DOCTYPE html>
<html>
<head>
    <title>Formulário</title>
    <meta charset="UTF-8">
    <title>Formulário SITE ETEC</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            width: 350px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #2c3e50;
            font-size: 22px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 6px;
            color: #34495e;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #2ecc71;
            border: none;
            border-radius: 6px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: #27ae60;
        }
    </style>
</head>
<body>
    
    <form method="GET" action="{{ route('form.processa') }}">
    <h1>Formulário - SITE ETEC</h1>
        <label>Nome:</label>
        <input type="text" name="nome">

        <label>Idade:</label>
        <input type="number" name="idade">

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
