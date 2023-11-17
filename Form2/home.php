<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #201b2c;
            text-align: center;
            color: #00ff88;
        }
        .box{
            position: absolute;
            top:  50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #2f2841;
            padding: 30px;
            border-radius: 15px;
        }
        a{
            text-decoration: none;
            color: #2b134b;
            background-color: #00ff88;
            border: 3px solid #201b2c;
            border-radius: 10px;
            padding: 10px;
        }
        a:hover{
            box-shadow: 0px 10px 40px -12px #00ff8052;
        }
        img{
            width: 200px;
            
        }
    </style>
</head>
<body>
    <h1>Bem-Vindo!</h1>
    <h2>Avaliadores</h2>
    <img src="imagem/cadeado.jpg">
    <div class="box">
        <a href="login.php">Logar</a>
        <a href="Forms2.php">Cadastrar</a>
    </div>
    
</body>
</html>