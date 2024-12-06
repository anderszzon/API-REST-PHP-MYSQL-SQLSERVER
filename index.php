<?php
    require_once "models/Cliente.php";

    switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            if(isset($_GET['id'])){
                echo json_encode(Cliente::getWhere($_GET['id']));
            }
            else {
                //$cliente = new Cliente();
                echo json_encode(Cliente::getAll());  
                //echo 'Este es el metodo GET';
            }
            break;

        default:
            break;
    }