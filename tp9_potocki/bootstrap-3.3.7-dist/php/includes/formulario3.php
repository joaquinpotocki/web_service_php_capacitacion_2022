<?php
        if(isset($_POST['func'])){
                if($_POST['func'] == 'formulario3'){
                    $check = $_POST['check'];
                    switch ($check) {
                        case "Cereza":
                            echo '<h3>Tu fruta preferida es:</h3><div style="color:#A40020;">Cereza</div>';
                            break;
                        case "Fresa":
                            echo '<h3>Tu fruta preferida es:</h3><div style="color:#FA1304;">Fresa</div>';
                            break;
                        case "Limón":
                            echo '<h3>Tu fruta preferida es:</h3><div style="color:#FFF300;">Limón</div>';
                            break;
                        case "Manzana":
                            echo '<h3>Tu fruta preferida es:</h3><div style="color:#FC030B;">Manzana</div>';
                            break;
                        case "Naranja":
                            echo '<h3>Tu fruta preferida es:</h3><div style="color:#F98605;">Naranja</div>';
                            break;
                        case "Pera":
                            echo '<h3>Tu fruta preferida es:</h3><div style="color:#BEF905;">Pera</div>';
                            break;

                    }
                }       
        }
?>