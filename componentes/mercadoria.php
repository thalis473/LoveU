<section class="navbar justify-content-center "> 

    <?php
    
        $sql ="Select * from produtos";  #logica pra executar a consulta no banco de dados.
    
    $result = $conn->query($sql);// resultado da consulta armazena na variavel $result, pra isso usamos $conn(conexão) com query(banco de dados), executando a funçao da variavel $sql.
    
    if($result-> num_rows > 0){ 
    
    while($rows = $result-> fetch_assoc()){ 
    ?>
    
     
    <div class="itens1  col-md-4 text-center" id="<?php echo $rows["categoria"];?>">
                <img class="img-fluid" width="100px" height="100px" src="<?php echo $rows["img"];?>" onclick="destaque(this)">
                <p class="  text-light bg-dark text-monospace"> <?php echo $rows["descricao"];?></p>
                <p class=" text-monospace" > cod.<?php echo $rows["codigo_produto"];?></p>
                <hr>
                <p class="  text-danger" id="valor01">R$ <?php echo $rows["valor_antigo"];?> </p>
                <p class=" text-info font-weight-bold">R$ <?php echo $rows["valor_final"];?></p>
                <a href="https://shopee.com.br/loveuloja"> 
                <i class="fas fa-shopping-bag"></i>
                    <button class="btn bg-danger text-white">Pagamento via Shopee</button>
                </a> 
                <br/>  
                <br/> 
                
            </div>
            
        <?php
    }
    }
    else{
        echo "Nehum produto cadastrado!"; #resultado da condiçao caso o nehuma linha seja encontrada. 
    }
    ?>
    
    
          
    
          
        </section>