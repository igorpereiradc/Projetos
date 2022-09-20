<?php

if(isset($_POST['submit']))
{


    include_once('config.php');

    $nome = $_POST['Nome'];
    $sobrenome = $_POST['SobreNome'];
    $email =  $_POST['email'];
    $telefone = $_POST['number'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO contato(nome,sobrenome,email,telefone,senha) VALUES ('$nome', '$sobrenome' , '$email', '$telefone' , '$senha')");

    header('Location: login.php');


}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            font-size: 75%;
        }
        .box{
            color:white;
            position:absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 12px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border :3px solid dodgerblue;
        }
        legend{
            border : 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
            color:white;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background:none;
            border:none;
            border-bottom: 1px solid white;
            outline: none;
            color:white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position:absolute;
            top:0px;
            left:0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput ,
        .inputUser:valid ~ .labelInput{
            top : -20px;
            font-size: 12px;
            color:dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
            }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            cursor:pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
        </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="box">
        <form action = "formulario2.php" method = "POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="Nome" id="Nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>
            <br><br>
                <div class="inputBox">
                    <input type="text" name="SobreNome" id="Sobrenome" class="inputUser" required>
                    <label for="sobrenome"class="labelInput">Sobrenome</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email"class="labelInput">Email</label>
                    <br><br>
                </div>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="number" name="number" id="number" class="inputUser" required>
                    <label for="number"class="labelInput">Telefone</label>
                    <br>
            <br>
            <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
