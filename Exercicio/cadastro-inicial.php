<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <script>


        function validarSenha() {
            var senha = document.getElementById('senha').value;
            var senhaC = document.getElementById('senhaC').value;
            if (senha !== senhaC) {
                alert("Senhas diferentes");
                return false;
            };
        }
    </script>
</head>
<body>
<form method="post" action="cadastro.php" onsubmit="javascript: return validarSenha()">
            <label>Nome:</label>
            <input name ="nome" id ="nome" type ="text" required/>
            <hr>
            <label for="email">Email:</label>
            <input name="email" id ="email" type="email" required>
            <hr>
            <label for="senha">Senha:</label>
            <input name="senha" id ="senha"type="password" required/>
            <hr>
            <label for="senhaC">Confirmar senha:</label>
            <input name="senhaC" id ="senhaC" type="password" required/>
            <hr>
            <input type="submit" value="PROXIMO">             
    </form> 
    
   
    
</body>
</html>