<?php
$servername="localhost";
$username="root";
$passaword="";
$database= "loja_loveu";

$conn = mysqli_connect( $servername,$username,$passaword,$database);

if(!$conn){
die("A conexão ao BD falhou: ". mysqli_connect_error());

}
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
    <link rel=" stylesheet" href="./css_global/global.css">
     <!-- style local-->
     <link rel=" stylesheet" href="./css_local/produtos.css">
       <!--Awesome-->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

</head>
<body>
     <?php
     include('./componentes/menu.php');
     ?>
        <br/><br/>
      <?php
     include('./componentes/carrosel.php');
     ?>
        <br/><br/>

        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Atenção</h4>
            <button type="button" class="border bg-white border-secondary  btn close" data-dismiss="alert" aria-label="Close">
               Fecha msg 
            </button>
            <p> <b>Nesse site ainda não é realizado pagamentos, ultilizamos da plataforma digital SHOPEE, mais por aqui você pode acompanhar as promoções, e lançamentos.</b></p>
            <hr>
            <p class="mb-0"> <b>É terá os meios de contato para tirar suas duvidas com nossos atendentes. </b></p>
           
         </div>
         <br/><br/>
     <?php
     include('./componentes/lista.php');
     ?>
        <br/><br/>
     <?php
     include('./componentes/mercadoria.php');
     ?>
        <br/><br/>
     <?php
     include('./componentes/footer.php');
     ?>
     
    <script type="text/javascript" src="./interacao/produtos.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>