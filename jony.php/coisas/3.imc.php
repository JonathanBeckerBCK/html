<?php

$NomePessoa   = readline("Insira Nome:") ; // N O M E

$PesoPessoa   = (float) readline("Insira Peso:") ; // M E T R O S
$AlturaPessoa = (float) readline("Insira altura:") ; // Q U I L O S

// I M C = Peso / (Altura . Peso)

$imc = $PesoPessoa / ($AlturaPessoa * $AlturaPessoa) ;

print $NomePessoa ." tem peso ". $PesoPessoa .", altura ". $AlturaPessoa . " e IMC ". $imc."\n" ;
