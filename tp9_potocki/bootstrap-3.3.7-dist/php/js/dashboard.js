function init_dashboard(al){

    $('#submit1').click(function(){
        enviar_form1(al);
    })
    $('#submit2').click(function(){
        enviar_form2();
    })
    $('#submit3').click(function(){
        enviar_form3();
    })
    $('#submit4').click(function(){
        enviar_form4();
    })
    $('#submit5').click(function(){
        enviar_form5();
    })
    $('#submit6').click(function(){
        enviar_form6();
    })

    $('#submit7').click(function(){
        let a = $('#conyugenteCheck').is(":checked");
        if(a == true){
            enviar_form7_dos();
            console.log('pepe')
        }else{
            enviar_form7();
            
        }
    })
    $('#submit8').click(function(){
        enviar_form8();
    })



}
function enviar_form1(ale){
    let copi = $('#num_copiado').val();
    if(ale == copi){
        $.ajax({
            url: 'includes/formulario.php',
            type: 'post',
            async: true,
            data: {
                'func': 'formulario1',
                'nombre': $('#nombre').val(),
                'email': $('#email').val(),
                'telefono': $('#telefono').val(),
                'opcion': $('#inputGroupSelect').val(),
                'area': $('#area').val()
            },
            dataType: 'json',
            success: function (data) {
                //variables
                let nom = $('#nombre').val()
                let tel = $('#telefono').val()
                let em = $('#email').val()
                let opc = $('#inputGroupSelect').val()
                let ar = $('#area').val()

                //Vacio cada mensaje resultado cada que ejecuto
                $('#resultado_p').empty();
                $('#nombre_p').empty();
                $('#email_p').empty();
                $('#opciones_p').empty();
                $('#telefono_p').empty();
                $('#area_p').empty();
                
                // los campos obligatorios no pueden estar vacios de lo contrario pasa esto
                if(nom =='' || em == '' || opc == '' || ar == ''){
                    let respuesta = '';
                    respuesta += 'Existe un campo vacio por favor completarlo';
                    $('#resultado_p').html(respuesta);
                }else{
                    //sino comprobamos el tamanio de nombre
                    if(nom.length < 10){

                        let respuesta = '';
                        respuesta += 'Nombre es menor a 10 caracteres';
                        $('#resultado_p').html(respuesta);
                    }else{
                        //sino pasa nombre
                        $('#nombre_p').html(data.nombre);
                    
                        //el correo lo valido dentro del archivo hi.php
                        $('#email_p').html(data.email);

                        //telefono no es obligatorio
                        if(tel == ''){
                            let vacio2 = '';
                            vacio2 += 'Tranqui no es obligatorio!'
                            $('#telefono_p').html(vacio2);
                        }else{
                            $('#telefono_p').html(data.telefono);
                        }
                        //las opciones solamente son rqueridas asi que no pueden estar vacias
                        $('#opciones_p').html(data.opcion);

                        //el area tiene que ser mayor a 130caracteres
                        if(ar.length < 130){
                            let respuesta = '';
                            respuesta += 'Area es menor a 130 caracteres por favor vuelva a escribir';
                            $('#resultado_p').html(respuesta);
                        }else{
                            $('#area_p').html(data.area);
                        }
                    }
                }
            }
        })
    }else{
        $('#capcha').html('Error en el capcha por favor copie correctamente la proxima!');
    }
}


function enviar_form2(){
    $.ajax({
        url: 'includes/formulario2.php',
        type: 'post',
        async: true,
        data: {
            'func': 'formulario2',
            'pixeles': $('#pixeles').val()
        },
        dataType: 'html',
        success: function (data) {            
            $('.resultados-form2').html(data);
        }
    })
}

function enviar_form3(){
    $.ajax({
        url: 'includes/formulario3.php',
        type: 'post',
        async: true,
        data: {
            'func': 'formulario3',
            'check': $('input:radio[name=customRadio]:checked').val()
        },
        dataType: 'html',
        success: function (data) {            
            $('.resultados-form3').html(data);
        }
    })
}
function enviar_form4(){
    let check = $('input:radio[name=customRadio2]:checked').val();
    let img = '';
    switch (check) {
        case "Cereza":
            img = '<h3>Tu fruta preferida es:</h3><div><img src="img/cereza.jpg"></div>';
            break;
        case "Fresa":
            img = '<h3>Tu fruta preferida es:</h3><div><img src="img/fresa.jpg"></div>';
            break;
        case "Limón":
            img = '<h3>Tu fruta preferida es:</h3><div><img src="img/limon.jpg"></div>';
            break;
        case "Manzana":
            img = '<h3>Tu fruta preferida es:</h3><div><img src="img/manzana.jpg"></div>';
            break;
        case "Naranja":
            img = '<h3>Tu fruta preferida es:</h3><div><img src="img/naranja.jpg"></div>';
            break;
        case "Pera":
            img = '<h3>Tu fruta preferida es:</h3><div><img src="img/pera.jpg"></div>';
            break;
    }
    $('.resultados-form4').html(img);
}
function enviar_form5(){
    $.ajax({
        url: 'includes/formulario5.php',
        type: 'post',
        async: true,
        data: {
            'func': 'formulario5',
            'colorFondo': $('input:radio[name=customCheckFondo]:checked').val(),
            'colorTexto': $('input:radio[name=customCheckTexto]:checked').val()
        },
        dataType: 'html',
        success: function (data) {            
            $('.resultados-form5').html(data);
        }
    })
}
function enviar_form6(){
    $.ajax({
        url: 'includes/formulario5.php',
        type: 'post',
        async: true,
        data: {
            'func': 'formulario5',
            'colorFondo': $('#color').val(),
            'colorTexto': $('input:radio[name=customCheckTexto]:checked').val()
        },
        dataType: 'html',
        success: function (data) {            
            $('.resultados-form5').html(data);
        }
    })
}
function enviar_form7(){
    $.ajax({
        url: 'includes/formulario7.php',
        type: 'post',
        async: true,
        data: {
            'func': 'formulario7',
            'ingresoMensual': $('#ingresoMensual').val(),
        },
        dataType: 'json',
        success: function (data) {            
            $('#1').html(data.obr_social);
            $('#2').html(data.sindical);
            $('#3').html(data.sepelio);
            $('#4').html(data.conv_col);
            $('#5').html(data.gan_sal);
            $('#neto').html(data.neto);
            $('#ingreso').html(data.ingresoMensual);
        }
    })
}
function enviar_form7_dos(){
    $.ajax({
        url: 'includes/formulario7dos.php',
        type: 'post',
        async: true,
        data: {
            'func': 'formulario7dos',
            'ingresoMensual': $('#ingresoMensual').val(),
            'conyugenteIngreso': $('#conyugenteIngreso').val()
        },
        dataType: 'json',
        success: function (data) {            
            $('#res1').html(data.obr_social);
            $('#res2').html(data.sindical);
            $('#res3').html(data.sepelio);
            $('#res4').html(data.conv_col);
            $('#res5').html(data.gan_sal);
            $('#res6').html(data.obr_social_conyugente);
            $('#res7').html(data.sindical_conyugente);
            $('#res8').html(data.sepelio_conyugente);
            $('#res9').html(data.conv_col_conyugente);
            $('#res10').html(data.gan_sal_conyugente);
            $('#neto_conyu').html(data.neto_conyugente);
            $('#ingreso_conyu').html(data.conyugente);

        }
    })
}
function enviar_form8(){
    $.ajax({
        url: 'includes/formulario8.php',
        type: 'post',
        async: true,
        data: {
            'func': 'formulario8',
            'inferior': $('#inferior').val(),
            'superior': $('#superior').val()
        },
        dataType: 'html',
        success: function (data) {            
            $('.resultados-form8').html(data);
        }
    })
}