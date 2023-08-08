<?php 

// Nome do autor
$nome = 'Vitor Carvalho'; 
echo $nome;

// Concatenar strings

echo '<br><br>';

$nome = "Vitor";
$Saudacao = "Olá, ".$nome."! Bem vindo ao nosso site";
echo $Saudacao;

echo '<br><br>';

//(===) Identico
$valor1=10;
$valor2="10";
if ($valor1 === $valor2){

    echo "Os valores são iguais";
} else {

    echo "Os valores são diferentes";

}

?>