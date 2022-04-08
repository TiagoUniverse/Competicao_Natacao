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
    $nome = 'Tiago';
    $idade = '20';

    //Var_dump exibe o que tem armazenado na variável
    //Deduz o tipo da variável
    //var_dump($nome);
    //var_dump($idade);

    if($idade >=6 && $idade <=  12){
        echo  "$nome, com $idade anos, pertence à categoria: Infantil";
    }elseif($idade >= 13 && $idade <= 18 ){
        echo  "$nome, com $idade anos, pertence à categoria: Adolescente";
    }elseif($idade > 18){
       echo  "$nome, com $idade anos, pertence à categoria: Adulto";
    }else{
        echo 'Idade mínina de 6 anos!';
    }

?>