<?php
        if(isset($_POST['func'])){
                if($_POST['func'] == 'formulario2'){
                    $pixeles = $_POST['pixeles'];
                    $cuadrado = '<div style="width:'.$pixeles.'px;height:'.$pixeles.'px;background:blue;"></div>';
                    echo $cuadrado;
                }       
        }
        
?>