<?php

// programa = ler 10 números e identificalas de é positivo ou negativo

for($i=0; $i < 10 ; $i++)
{

$num = readline("Informe um número:");

    if($num > 0)
    {
        print "positivo\n";
    }
    if($num < 0)
    {
        print "negativo\n";
    }
    if($num == 0)
    {
        print "neutro\n";
    }
}