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
        case 'POST':
            $datos = json_decode(file_get_contents('php://input'));
            if($datos != NULL){
                if(Cliente::insert($datos->nombre, $datos->apellido1, $datos->apellido2, $datos->fechaN, $datos->genero)){
                    http_response_code(200);
                }
                else {
                    http_response_code(400);
                }
            }
            else {
                http_response_code(405);
            }
            break;
        case 'PUT':
            $datos = json_decode(file_get_contents('php://input'));
            if($datos != NULL){
                if(Cliente::update($datos->id, $datos->nombre, $datos->ap, $datos->am, $datos->fn, $datos->genero)){
                    http_response_code(200);
                }
                else {
                    http_response_code(400);
                }
            }
            else {
                http_response_code(405);
            }
            break;
        case 'DELETE':
            if(isset($_GET['id'])){
                if(Cliente::delete($_GET['id'])){
                    http_response_code(200);
                }
                else {
                    http_response_code(400);
                }
            }
            else {
                http_response_code(405);
            }

        default:
            break;
    }