<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap');

body{
    margin: 0;
    font-family: 'Noto Sans', sans-serif;
}

body * {
    box-sizing: border-box;
}
.main-login {
    width: 100vw;
    height: 100vh;
    background: #201b2c;
    display: flex;
    justify-content: center;
    align-items: center;
}

.left-login{
    width: 50vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.left-login h1 {
    font-size: 3vw;
    color: #77ffc0 
}


.right-login{
    width: 50vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.card-login{
    width: 60%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 30px 35px;
    background: #2f2841;
    border-radius: 20px;
    box-shadow: 0px 10px 40px #00000056;
}

.card-login > h1 {
    color: #00ff88;
    font-weight: 800;
    margin: 0;
}

.textfield{
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
}

.textfield > input {
    width: 100%;
    border: none;  
    border-radius: 10px;
    padding: 15px;
    background: #514869;
    color: #f0ffffde;
    font-size: 12pt;
    box-shadow: 0px 10px 40px #00000056;
    outline: none;
    box-sizing: border-box;
}

.textfield > label {
    color: #f0ffffde;
    margin-bottom: 10px;

}

.textfield > input::placeholder{
    color: #f0ffff94;
}

.inputSubmit{
    width: 100%;
    padding: 16px 0px;
    margin: 25px;
    border: none;
    border-radius: 8px;
    text-transform: uppercase;
    font-weight: 800;
    letter-spacing: 3px;
    color: #2b134b;
    background-color: #00ff88;
    cursor: pointer;
    box-shadow: 0px 10px 40px -12px #00ff8052;
}

@media only screen and (max-width: 950px){
    .card-login{
        width: 85%;
    }
    
}

@media only screen and (max-width: 600px){
    .main-login{
        flex-direction: column;
    }
    .left-login > h1 {
        display: none;
    }

    .left-login{
        width: 100%;
        height: auto;
    }

    .right-login{
        width: 100%;
        height: auto;
    }
    
    .card-login{
        width: 90%;
    }
}
    </style>
</head>
<body>
    <div class="main-login">
        <div class = "left-login">  
            <h1>Faça o Login<br>E acesse sua conta</h1> 
            <form action="testeLogin.php" method = "POST">
        </div>
        <div class = "right-login"> 
            <div class = "card-login">
                <h1>LOGIN</h1>
                <div class=" textfield">
                    <label for="email">Email</label>
                    <input type="text" name = "email" placeholder="Email">
                </div>
                <div class=" textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name = "senha" placeholder="Senha">
                </div>
                <input class="inputSubmit" type="submit" name ="submit" value="Entrar">
            </form>
            </div>

        </div> 
    </div>
</body>
</html>