<?php
    require "carro.php";
    
    $meuCarro = new Carro("Ford", "K", "2012");

    $meuCarro->imprimir();

    $meuCarro->ano = 2017;

    $meuCarro->imprimir();


