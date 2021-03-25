<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!--boodstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- style global-->
    <link rel=" stylesheet" href="./css_global/global.css">
    <!--style local-->
    <link rel=" stylesheet" href="./css_local/index.css">
    <!--Awesome-->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    
</head>
<body>
     <?php
     include('./componentes/menu.php');
     ?>
     <br>
     <br> <br> <br>
     
     <section>
    
        
        <div class="jumbotron jumbotron-flui jumbotron-with-background ">
           
        </div>
        <div class="container-fluid text-center bg-secondary align-items-start "><h5 class="text-monospace text-white">Frete grátis para todo estado do RJ</h5></div> 
        <br/><br/>
        <h1 class="text-center">Aproveite as Promoções</h1>
        <br/>
        <h1 class="text-center">-</h1>
        <br/>
        <h4 class="text-center text-monospace">Itens essenciais</h4>
        <?php
     include('./componentes/card.php');
     ?>
        
    </section> 
    <br/><br/>
      <?php
     include('./componentes/footer.php');
     ?>



<!--boodstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>