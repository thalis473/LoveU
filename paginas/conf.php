<?php
// de o valor as variaveis
$servername="localhost";
$username="root";
$passaword="";
$database= "recode_eletro";

/* cria a conexo atraves de uma logica
$conn e uma vriavel padrão
mysqli_ será a biblioteca das funçoes do banco de dados*/

$conn = mysqli_connect( $servername,$username,$passaword,$database);

# A logica para verificaçao da conexão;
if(!$conn){
die("A conexão ao BD falhou: ". mysqli_connect_error());#essa logica não e obrigatoria, porém sempre e bom fazer, pra eliminar um futuro problema a menos de conexão.
}
if(isset($_POST['nome']) && isset($_POST['numero']) && isset($_POST['msg']) ){ # Nesse if , a minha condição e pra enviar todos os dados,  o usuario precisa preencher todos os campos, pra eu poder continuar com o programa, caso ao contrario else.

  $nome= $_POST['nome'];#nessa variavel armazenarei o nome do usuario.
  $numero= $_POST['numero'];#numero do usuario.
  $msg= $_POST['msg'];# comentario do usuario.

  
 $sql="insert into comentarios (nome,numero,msg) values('$nome',$numero,'$msg' )";
  
$resul=$conn->query($sql);#ele executa cada linha do banco de dados.

  };


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <!--boodstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- style global-->
    <link rel=" stylesheet" href="../css_global/global.css">
     <!-- style local-->
     
</head>
<body>
    
    <h1>Relatorios<h1>
        <nav class="navbar">
        <div class="container text-primary">
    <?php

$sql ="Select * from comentarios";  
  
$result = $conn->query($sql);// resultado da consulta armazena na variavel $result, pra isso usamos $conn(conexão) com query(banco de dados), executando a funçao da variavel $sql.

if($result-> num_rows > 0){ #num_rows = numero de linhas no Banco de dados.

while($rows = $result-> fetch_assoc()){
    ?>
    <div class="itens1  col-md-4 text-center">
              
                <p class="text-light bg-dark text-monospace"> <?php echo $rows["nome"];?></p>
                <p class=" text-monospace" > <?php echo $rows["data"];?></p>
                <hr>
                <p class="text-info font-weight-bold"><?php echo $rows["msg"];?></p>
            </div>
                <hr>
 
  <?php
};
};

?>
</div>
</nav>
<div>
<button type="button" class="btn bg-danger btn-outline-white">
    <a href="./index.php">
    Entrar no Site
   </a>
</button>
        
</div>

</body>
</html>