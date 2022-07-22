<?php
        if(isset($_POST['func'])){
                if($_POST['func'] == 'formulario1'){
                        $nombre = $_POST['nombre'];
                        $email = $_POST['email'];
                        $telefono = $_POST['telefono'];
                        $opciones = $_POST['opcion'];
                        $area = $_POST['area'];
                        $respuesta = 'Tu nombre es: '.$nombre;
                        if (filter_var($email, FILTER_VALIDATE_EMAIL) == true) {
                                $respuesta2 = "Esta dirección de correo ($email) es válida.";
                        }else{
                                $respuesta2 = "Esta dirección de correo ($email) no es valida.";  
                        }
                        $respuesta3 = 'Tu numero personal es: '.$telefono;
                        $respuesta4 = 'La opcion seleccionada es: '.$opciones;
                        $respuesta5 = '<b>El texto escrito en el area es </b>: '.$area;
                        $aleatorio = mt_rand(1,30);
                }       
        }
        $form_1 = new stdClass();
        $form_1->nombre = $respuesta;
        $form_1->email = $respuesta2;
        $form_1->telefono = $respuesta3;
        $form_1->opcion = $respuesta4;
        $form_1->area = $respuesta5;
        $form_1->aleatorio = $aleatorio;
        echo json_encode($form_1);
?>