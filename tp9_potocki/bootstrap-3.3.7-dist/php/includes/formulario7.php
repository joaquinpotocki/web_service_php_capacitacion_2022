<?php
        if(isset($_POST['func'])){
            if($_POST['func'] == 'formulario7'){
                $ingresoMensual = $_POST['ingresoMensual'];
                $obr_social = $ingresoMensual * 0.06;
                $sindical = $ingresoMensual * 0.025;
                $sepelio = $ingresoMensual * 0.015;
                $conv_col = $ingresoMensual * 0.02;
                if ($ingresoMensual > 50000){
                    $gan_sal = $ingresoMensual * 0.15;
                }else{
                    $gan_sal = 0;
                }
                $neto = $ingresoMensual - ($obr_social + $sindical + $sepelio + $conv_col + $gan_sal);

                $respuesta = 'Se te desconto de tu obra social: '.$obr_social;
                $respuesta2 = 'Se te desconto de tu cuota sindical: '.$sindical;
                $respuesta3 = 'Se te desconto de tu seguro de sepelio: '.$sepelio;
                $respuesta4 = 'Se te desconto de tus convenios colectivos: '.$conv_col;
                $respuesta5 = 'Se te desconto ganancias salariales: '.$gan_sal;
                $sal_neto= 'Salario neto luego de los descuentos: '.$neto;
                $sal_bruto= 'Salario bruto: '.$ingresoMensual;
            }
        }
        $form_7 = new stdClass();
        $form_7->obr_social = $respuesta;
        $form_7->sindical = $respuesta2;
        $form_7->sepelio = $respuesta3;
        $form_7->conv_col = $respuesta4;
        $form_7->gan_sal = $respuesta5;
        $form_7->neto = $sal_neto;
        $form_7->ingresoMensual = $sal_bruto;
        echo json_encode($form_7);
?>