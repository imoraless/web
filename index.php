<!--switch con categorias, default con pantalla inicio. Llama a controlador, controlador a base de datos y luego controlador a view>

<?php
// index.php

$accio = $_GET['accio'] ?? NULL;

switch ($accio) 
{
    case 'tour':
        $id = 4;
        include __DIR__.'/resource_tour.php';
        break;
    case 'discos':
        
        $id = 2;
        include __DIR__.'/resource_discos.php';
        break;
    case 'merch':
        $id = 5;
        include __DIR__.'/resource_merch.php';
        break;
    case 'admin':
        include __DIR__.'/resource_admin.php';
        break;
    //case 'nosotros':
       // include __DIR__.'/resource_nosotros.php';
       // break;

    case 'registrat':
        include __DIR__.'/resource_registrat.php';
        break;
    case 'carro':
        include __DIR__.'/resource_carro.php';
        break;
    case 'description':
        include __DIR__.'/resource_description.php';
        break;
    default:
        include __DIR__.'/resource_nosotros.php';
        break;
}