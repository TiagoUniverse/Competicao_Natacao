<?php
   // Criando um array
   $categoria = [];
   $categoria [] = 'infantil';
   $categoria [] = 'adolescente';
   $categoria [] = 'adulto';
   $categoria [] = 'idoso';

   //Mostra o array
   // print_r($categoria);
    
    //Variváveis
    $nome = $_POST[];
    $idade = '20';

    //Var_dump exibe o que tem armazenado na variável
    //Deduz o tipo da variável
    //var_dump($nome);
    //var_dump($idade);


    if($idade >=6 && $idade <= 12){
       for($i = 0; $i <= count($categoria); $i++){
           if($categoria[$i] == 'infantil'){
              echo  "O nadador $nome, com $idade anos, pertence à categoria: Infantil";  
              break;
           }    
       }
    }elseif($idade >=13 && $idade <=18){
        for($i = 0; $i <= count($categoria); $i++){
            if($categoria[$i] == 'adolescente'){
               echo  "O nadador $nome, com $idade anos, pertence à categoria: Adolescente";  
               break;
            }    
        }
    }elseif($idade >18 && $idade <=60){
        for($i = 0; $i <= count($categoria); $i++){
            if($categoria[$i] == 'adulto'){
               echo  "O nadador $nome, com $idade anos, pertence à categoria: Adulto";  
               break;
            }    
        }        
    }elseif($idade >60){
        for($i = 0; $i <= count($categoria); $i++){
            if($categoria[$i] == 'idoso'){
               echo  "O nadador $nome, com $idade anos, pertence à categoria: Idoso";  
               break;
            }    
        }        
    }else{
        echo 'Idade mínina de 6 anos!';
    }

?>
