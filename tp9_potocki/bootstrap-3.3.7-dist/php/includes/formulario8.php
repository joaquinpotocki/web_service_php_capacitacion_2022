<?php
        if(isset($_POST['func'])){
            if($_POST['func'] == 'formulario8'){
                $minimo = $_POST['inferior'];
                $maximo = $_POST['superior'];

                $html = '';
                $html .= '<table border="3">';
                $inicio = $minimo ;
                $superior = $maximo;

                for($n1 = $inicio ; $n1 <= $superior; $n1++){
                    $html .= "<tr>";
                    for($n2 = $inicio; $n2 <= $superior; $n2++){
                        $html .= '<td style="padding:5px;">'.($n1*$n2).'</td>';
                    }
                    $html .= "</tr>";
                }
                $html .= "</table>";
                echo $html;
            }
        }
?>