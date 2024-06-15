<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nomeCartao = $_POST['nomeCartao'];
$numeCartao = $_POST['numeCartao'];
$codigoVali = $_POST['codigoVali'];
$vencimento = $_POST['vencimento'];
$cpf = $_POST['cpf'];
$planos = $_POST['planos'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esolha categorias de preferencia</title>

</head>

<body>

    <form method="post" action="matriz.php">
        <label>Nome do Perfil:</label>
        <input name="nomePerfil" id="nomePerfil">

        <p>Escolha categorias de seu interesse para melhor experiencia</p>
        <input type="checkbox" id="categoria" name="categoria[]" value="Terror" />
        <label for="terror">Terror</label>

        <input type="checkbox" id="categoria" name="categoria[]" value="Comédia" />
        <label for="comedia">Comédia</label>

        <input type="checkbox" id="categoria" name="categoria[]" value="Drama" />
        <label for="drama">Drama</label>

        <input type="checkbox" id="categoria" name="categoria[]" value="Romance" />
        <label for="romance">Romance</label>

        <input type="checkbox" id="categoria" name="categoria[]" value="Ação" />
        <label for="acao">Ação</label>

        <input type="checkbox" id="categoria" name="categoria[]" value="Desenhos" />
        <label for="desenhos">Desenhos</label>

        <input type="hidden" name="nome" id="nome" value="<?= $nome ?>">
        <input type="hidden" name="email" id="email" value="<?= $email ?>">
        <input type="hidden" name="senha" id="senha" value="<?= $senha ?>">
        <input type="hidden" name="nomeCartao" id="nomeCartao" value="<?= $nomeCartao ?>">
        <input type="hidden" name="numeCartao" id="numeCartao" value="<?= $numeCartao ?>">
        <input type="hidden" name="codigoVali" id="codigoVali" value="<?= $codigoVali ?>">
        <input type="hidden" name="vencimento" id="vencimento" value="<?= $vencimento ?>">
        <input type="hidden" name="cpf" id="cpf" value="<?= $cpf ?>">
        <input type="hidden" name="planos" id="planos" value="<?= $planos ?>">



        <button type="submit">Avançar</button>
    </form>



</body>

</html>