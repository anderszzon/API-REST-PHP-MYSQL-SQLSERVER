<?php

    class Connection extends Mysqli {
        function __construct() {
            parent::__construct('localhost', 'root', '', 'apirest');
            $this->set_charset('utf8');
            
            //$this->connect_error == NULL ? 'Conexión exítosa a la DB' : die('Error al conectarse a la BD');

            if ($this->connect_error == NULL) {
                // Enviar mensaje a la consola
                //echo "<script>console.log('Conexión exitosa a la DB');</script>";
            } else {
                // Enviar mensaje de error a la consola
                //echo "<script>console.error('Error al conectarse a la BD');</script>";
                die();
            }

        }//end __construct
    }//end class Connection