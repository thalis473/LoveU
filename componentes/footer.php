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
    <footer class="container-fluid bg-secondary">
      <br/>
    <div class="row ">
      <div class="col-sm  align-self-center">
        <div> 
          <h4 class="font-italic text-light">Fique conectado</h4>
          
          <a class='fab fa-whatsapp-square'  href="https://wa.me/5521991468483"style='font-size:100px;color:green'></a>
          <a class='fab fa-instagram' href="https://www.instagram.com/loveuloja/?hl=pt-br" style='font-size:100px;color:blue'></a>
          <a class='fab fa-facebook-square'  href="https://www.facebook.com/Thalis.P.Andrade" style='font-size:100px;color:blue'></a>
          

        </div>
      </div>
      <div class="col-sm  ">
            <form >
              <h4 class="font-italic text-light">Fique por dentro das novidades</h4>
              
                <div class="form-group p4">
                  <label for="exampleInputEmail1"class="text-light">Endereço de email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                  <small id="emailHelp" class="form-text text-light">Nunca vamos compartilhar seu email, com ninguém.</small>
                </div>           
                <button type="submit" class="btn btn-primary justify-content-center">Participe </button>
              </form>
              <br/> <br/> 
      </div>
      <div class="col-sm  align-self-center">
        <h4 class="font-italic text-light">Formas de pagamentos </h4>
            <img class="img-fluid img_forma_de_pagamentos" src="./paginas/imagens/formas_de_pagamento.png"/>
        
      </div>
      <br/>    
      </div>
      <div class="container-fluid text-center ">
      <p class="font-weight-light text-secondary backcolor " >  &trade;Butique</p>
    </div>
    </footer>
    