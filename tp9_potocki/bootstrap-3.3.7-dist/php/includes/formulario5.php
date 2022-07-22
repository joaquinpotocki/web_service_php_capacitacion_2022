<?php
        if(isset($_POST['func'])){
                if($_POST['func'] == 'formulario5'){
                    $fondo = $_POST['colorFondo'];
                    $texto = $_POST['colorTexto'];
                    $punto5 = '<div style="background:'.$fondo.';color:'.$texto.'"><p>Aliquam suscipit lacinia ultricies. Aenean maximus luctus arcu, non suscipit elit lacinia a. Vestibulum quis commodo ante. </p></div>';
                    echo $punto5;
                }       
        }    
?>