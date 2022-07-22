<?php
        if(isset($_POST['func'])){
            if($_POST['func'] == 'formulario7dos'){
                $ingresoMensual = $_POST['ingresoMensual'];
                $conyugente = $_POST['conyugenteIngreso'];
                $obr_social = $ingresoMensual * 0.06;
                $sindical = $ingresoMensual * 0.025;
                $sepelio = $ingresoMensual * 0.015;
                $conv_col = $ingresoMensual * 0.02;
                if ($ingresoMensual > 50000){
                    $gan_sal =$ingresoMensual * 0.015;
                }else{
                    $gan_sal = 0;
                }
                $neto = $ingresoMensual - ($obr_social + $sindical + $sepelio + $conv_col + $gan_sal);

                $obr_social_conyugente = $conyugente * 0.06;
                $sindical_conyugente  = $conyugente * 0.025;
                $sepelio_conyugente  = $conyugente * 0.015;
                $conv_col_conyugente  = $conyugente * 0.02;
                
                if ($conyugente > 50000){
                    $gan_sal_conyugente = $conyugente * 0.015;
                }else{
                    $gan_sal_conyugente = 0;
                }
                $neto_conyugente = $ingresoMensual - ($obr_social_conyugente + $sindical_conyugente + $sepelio_conyugente + $conv_col_conyugente + $gan_sal_conyugente);
                $respuesta = 'Se te desconto de tu obra social: '.$obr_social;
                $respuesta2 = 'Se te desconto de tu cuota sindical: '.$sindical;
                $respuesta3 = 'Se te desconto de tu seguro de sepelio: '.$sepelio;
                $respuesta4 = 'Se te desconto de tus convenios colectivos: '.$conv_col;
                $respuesta5 = 'Se te desconto ganancias salariales: '.$gan_sal;
                $sal_neto = 'Salario neto luego de los descuentos: '.$neto;
                $sal_bruto = 'Salario bruto: '.$ingresoMensual;

                $respuesta6 = 'Conyugente: Se te desconto de tu obra social: '.$obr_social_conyugente;
                $respuesta7 = 'Conyugente: Se te desconto de tu cuota sindical: '.$sindical_conyugente;
                $respuesta8 = 'Conyugente: Se te desconto de tu seguro de sepelio: '.$sepelio_conyugente;
                $respuesta9 = 'Conyugente: Se te desconto de tus convenios colectivos: '.$conv_col_conyugente;
                $respuesta10 = 'Conyugente: Se te desconto ganancias salariales: '.$gan_sal_conyugente;
                $neto_conyu = 'Conyugente neto: '.$neto_conyugente;
                $sal_bruto_conyugente = 'Salario bruto: '.$conyugente;
            }      
        }
        $form_7_conyugente = new stdClass();
        $form_7_conyugente->obr_social = $respuesta;
        $form_7_conyugente->sindical = $respuesta2;
        $form_7_conyugente->sepelio = $respuesta3;
        $form_7_conyugente->conv_col = $respuesta4;
        $form_7_conyugente->gan_sal = $respuesta5;
        $form_7_conyugente->neto = $sal_neto;
        $form_7_conyugente->ingresoMensual = $sal_bruto;

        $form_7_conyugente->obr_social_conyugente = $respuesta6;
        $form_7_conyugente->sindical_conyugente = $respuesta7;
        $form_7_conyugente->sepelio_conyugente = $respuesta8;
        $form_7_conyugente->conv_col_conyugente = $respuesta9;
        $form_7_conyugente->gan_sal_conyugente = $respuesta10;
        $form_7_conyugente->neto_conyugente = $neto_conyu;
        $form_7_conyugente->conyugente = $sal_bruto_conyugente;
        echo json_encode($form_7_conyugente);
?>
