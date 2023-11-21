<?php


    if(isset($_POST['submit'])){
        //print_r('Nome: ' .$_POST['nome']);
        //print_r('<br>');
        //print_r('Email: ' .$_POST['email']);
        //print_r('<br>');
        //print_r('Senha: ' .$_POST['senha']);
        //print_r('<br>');
        //print_r('Idade: ' . $_POST['idade']);
        //print_r('<br>');
        //print_r('Peso: ' . $_POST['peso']);
        //print_r('<br>');
        //print_r('Altura: ' . $_POST['altura']);


        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $idade = $_POST['idade'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,idade,peso,altura) VALUES ('$nome','$email','$senha','$idade','$peso','$altura')");
        header('Location: login.php');

    }

?>
<!DOCTYPE html>
<html lang="pt-br"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: #fff;
            position: absolute;
            top:50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.9);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            color: #fff;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;

        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #submit{
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: #fff;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de pacientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="idade" id="idade" class="inputUser" required>
                    <label for="idade" class="labelInput">Idade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="peso" id="peso" class="inputUser" step="0.01" required>
                    <label for="peso" class="labelInput">Peso</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="altura" id="altura" class="inputUser" step="0.01" required>
                    <label for="altura" class="labelInput">Altura</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit" value="Enviar">
            </fieldset>
        </form>
    </div>
</body>
</html>