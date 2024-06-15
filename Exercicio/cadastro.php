<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro cartão</title>
</head>
<body>
<form method="post" action="categoria.php"> 
            <label for ="nomeCartao">Nome impresso no cartão</label>
            <input name ="nomeCartao"  id = "nomeCartao"type="text" required/>
            <hr>
            <label for="numeCartao">número o cartão:</label>
            <input name="numeCartao" id ="numeCartao"type="text" required />
            <hr>
            <label for="codigoVali">Código de validação: </label>
            <input name="codigoVali" id="codigoVali" type="text" required/>
            <hr>
            <label for="vencimento">Mes e ano de vencimento:</label>
            <input name="vencimento" id="vencimento"type="text" required/>
            <hr>
            <label for="cpf">CPF:</label>
            <input name="cpf" id="cpf" type="text" required/>
            <hr>
            <h2>Escolha seu plano</h2>
            <input type="radio" id="planos" name="planos" value="planoBasico" required/>
            <label for="planos">Plano basico com anuncios</label>
            <hr>
            <input type="radio" id="planos" name="planos" value="planoMedio" required/>
            <label for="planoMedio2">Plano Medio</label>
            <hr>
            <input type="radio" id="planos" name="planos" value="planoPremium" required/>
            <label for="planoPremium">Plano premium</label>
            <hr>
            <input type="hidden" name="nome" id="nome" value="<?=$nome?>">
            <input type="hidden" name="email"id="email" value="<?=$email?>">
            <input type="hidden" name="senha"id="senha" value="<?=$senha?>">
           
            <button type="submit">Avançar</button>
            </form>
                 


    
</body>
</html>