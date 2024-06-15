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
$nomePerfil = $_POST['nomePerfil'];
$categoria = $_POST['categoria'];


$dados=[
    'cadastro1' => [
        'nome' => [$nome],
        'email' => [$email],
        'senha' => [$senha]

    ],
    'cadastro2' => [
        'nomeCartao' => [$nomeCartao],
        'numeCartao' => [$numeCartao],
        'codigoVali' => [$codigoVali],
        'vencimento' => [$vencimento],
        'cpf' => [$cpf],
        'planos' => [$planos]
    ],
    'categoria' => [
        'nomePerfil' => [$nomePerfil],
        'categoria' => [$categoria]
    ],
    

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" style="text-align:center;">
    <h3>Login</h3>
  <tr>
    <th>NOME</th>
    <th>EMAIL</th>
    <th>SENHA</th>
  </tr>
  <tr>
    <td><?php
        echo $dados['cadastro1']['nome'][0]
    
    ?></td>
    <td><?php
        echo $dados['cadastro1']['email'][0]
    
    ?></td>
    <td><?php
        echo $dados['cadastro1']['senha'][0]
    
    ?></td>
  </tr>
  
</table>
<table border="1" style="text-align:center;">
    <h3>DADOS PESSOAIS</h3>
  <tr>
    <th>NOME CARTÃO</th>
    <th>NUMERO CARTÃO</th>
    <th>CODIGO VALIDADE</th>
    <th>VENCIMENTO</th>
    <th>CPF</th>
    <th>PLANOS</th>
  </tr>
  <tr>
    <td><?php
        echo $dados['cadastro2']['nomeCartao'][0]
    
    ?></td>
    <td><?php
        echo $dados['cadastro2']['numeCartao'][0]
    
    ?></td>
    <td><?php
        echo $dados['cadastro2']['codigoVali'][0]
    
    ?></td>
    <td><?php
        echo $dados['cadastro2']['vencimento'][0]
    ?></td>
   
    <td><?php
        echo $dados['cadastro2']['cpf'][0]
    ?></td>
    <td><?php
        echo $dados['cadastro2']['planos'][0]
    ?></td>

    
    
  </tr>
  
</table>
<table border=1>
  <tr>
    
    <th>NOME PERFIL</th>
    <th>CATEGORIAS</th>
  </tr>
  <tr>
    <td><?php
      echo $dados['categoria']['nomePerfil'][0]
    ?></td>
    <td>
      <?php
        foreach($dados['categoria']['categoria'][0] as $categoria){
            echo "{$categoria}"."<br>";
        };
      ?>
    </td>
  </tr>
</table>

</body>
</html>
