<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Index</title>
        <link rel="stylesheet" href="../jquery/jquery-ui.css">
        <link rel="stylesheet" href="../jquery/style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- css -->
        <link href="../css/index.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
<body>
    <div class="navbar-top">
        <div class="div-true">
            <a class="p-navbar">
                <img src="../img/profile-user.png" class="img2" alt="">
                <span class="span-brand">Alexander Pierce</span>
            </a>
        </div>
    </div>
    <div class="sidebar-bot">
        <div class="div-navbar">
            <div class="cont-background">
                <div class="perfil-alexander user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="img-alexander">
                        <img src="../img/profile-user.png" alt="">
                    </div>
                    <div class="info-nombre">
                        <a href="" class="Alex-a">Alexander Pierce</a>
                        <div class="div-online">
                            <div class="circulo"></div> <a href="">Online</a>
                        </div>

                    </div>
                </div>
                <div class="div-form">
                    <form action="POST">
                        <input type="text" placeholder="Search..">
                    </form>
                </div>
            </div>
            <div class="div-items">
                <ul> 
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="div-index">
        <div class="row">
            <div class="col-md-6">
                <div class="div-formularios">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseOne">
                                        Formulario #1
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="div-collapse">
                                        <form action="<?=$_SERVER['PHP_SELF']?>" method="post" id="formularioUno" >
                                            <div class="row">
                                                <div class="col-md-8 col-sm-8 col-xs-12">
                                                    <div class="form-group" id="pepe">
                                                        <input type="text" class="form-control is-valid" name="nombre" id="nombre" placeholder="Nombre" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-sm-8 col-xs-12">
                                                    <div class="form-group" id="pepe2">
                                                        <input class="form-control" name="email" id="email" placeholder="Email" type="text" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-sm-8 col-xs-12" id="pepe4">
                                                    <div class="form-group">
                                                        <input class="form-control" name="telefono" id="telefono" placeholder="Telefono" type="number">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-8 col-sm-8 col-xs-12">
                                                    <div class="form-group" id="#">
                                                            <select class="form-control" id="inputGroupSelect" required>
                                                                <option selected value="">Seleccione una opcion</option>
                                                                <option value="Baja">Baja</option>
                                                                <option value="Media">Media</option>
                                                                <option value="Alta">Alta</option>
                                                                <option value="Altisima">Altisima</option>
                                                                <option value="La gente se muere">La gente se muere!</option>
                                                            </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-8 col-sm-8 col-xs-12">
                                                    <div class="form-group ">
                                                        <textarea name="area" id="area" cols="30" rows="5"
                                                            class="form-control"
                                                            placeholder="Area de texto" required></textarea>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-8 col-sm-8 col-xs-12" id="pepe4">
                                                    <div class="form-group">
                                                        <input class="form-control" name="num_aleatorio" id="num_aleatorio" placeholder="Numero aleatorio" type="text" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-sm-8 col-xs-12" id="pepe4">
                                                    <div class="form-group">
                                                        <input class="form-control" name="num_copiado" id="num_copiado" placeholder="Copie el numero de arriba" type="text" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-8 col-xs-12">
                                                    <button class="btn btn-primary" type="button" id="submit1"> Enviar</buton>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseTwo">
                                        Formulario #2
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="div-collapse">
                                        <form action="<?=$_SERVER['PHP_SELF']?>" method="post" >
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                                        <div class="form-group" id="pepe">
                                                            <input type="number" class="form-control is-valid" name="pixeles" id="pixeles" placeholder="pixeles" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-8 col-xs-12">
                                                        <button class="btn btn-primary" type="button" id="submit2"> Enviar</buton>
                                                    </div>
                                                    <div class="col-md-6 col-sm-8 col-xs-12">
                                                        <button class="btn btn-secondary" type="button" id="limpiar"> limpiar</buton>
                                                    </div>
                                                </div>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseThree">
                                        Formulario #3
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="div-collapse">
                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio1" name="customRadio" value="Cereza" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio1">Cereza</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio2" name="customRadio" value="Fresa" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio2">Fresa</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio3" name="customRadio" value="Limón" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio3">Limón</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio4" name="customRadio" value="Manzana" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio4">Manzana</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio5" name="customRadio" value="Naranja" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio5">Naranja</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio6" name="customRadio" value="Pera" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio6">Pera</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-8 col-xs-12">
                                            <button class="btn btn-primary" type="button" id="submit3"> Enviar</buton>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseFour">
                                        Formulario #4
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="div-collapse">
                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio1" name="customRadio2" value="Cereza" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio1">Cereza</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio2" name="customRadio2" value="Fresa" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio2">Fresa</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio3" name="customRadio2" value="Limón" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio3">Limón</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio4" name="customRadio2" value="Manzana" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio4">Manzana</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio5" name="customRadio2" value="Naranja" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio5">Naranja</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio6" name="customRadio2" value="Pera" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio6">Pera</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-8 col-xs-12">
                                            <button class="btn btn-primary" type="button" id="submit4">Enviar</buton>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseFive">
                                        Formulario #5
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="div-collapse">
                                        <div class="col-md-6 col-sm-8 col-xs-12">
                                            <label class="custom-control-label" for="customRadio6">Fondo de pantalla</label>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-8 col-xs-12">
                                                    <input type="radio" id="customRadio1" name="customCheckFondo" value="#62844A" class="custom-control-input">
                                                </div>
                                                <div class="col-md-6 col-sm-8 col-xs-12">
                                                    <div style=" width: 20px;height: 20px;background:#62844A;"></div>
                                                </div>
                                                    
                                            </div>
                                            <!-- <label class="custom-control-label" for="customRadio6">Texto</label> -->
                                            <div class="row">
                                                <div class="col-md-6 col-sm-8 col-xs-12">
                                                    <input type="radio" id="customRadio1" name="customCheckFondo" value="#7CEED5" class="custom-control-input">
                                                </div>
                                                <div class="col-md-6 col-sm-8 col-xs-12">
                                                    <div style="width: 20px;height: 20px;background:#7CEED5;"></div>
                                                </div>
                                            </div>
                                            <label class="custom-control-label" for="customRadio6">Texto</label>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-8 col-xs-12">
                                                    <input type="radio" id="customRadio1" name="customCheckTexto" value="#62844A" class="custom-control-input">
                                                </div>
                                                <div class="col-md-6 col-sm-8 col-xs-12">
                                                    <div style=" width: 20px;height: 20px;background:#62844A;"></div>
                                                </div>
                                                    
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-8 col-xs-12">
                                                    <input type="radio" id="customRadio1" name="customCheckTexto" value="#7CEED5" class="custom-control-input">
                                                </div>
                                                <div class="col-md-6 col-sm-8 col-xs-12">
                                                    <div style="width: 20px;height: 20px;background:#7CEED5;"></div>
                                                </div>
                                            </div>
                                            <div class="custom-control">
                                                <button class="btn btn-primary" type="button" id="submit5">Enviar</buton>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseSix">
                                        Formulario #6
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="div-collapse">
                                        <div class="col-md-6 col-sm-8 col-xs-12">
                                            <label class="custom-control-label" for="customRadio6">Fondo de pantalla</label>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-8 col-xs-12">
                                                    <input type="color" id="color" name="customCheckFondo" value="" class="custom-control-input">
                                                </div>
                                            </div>
                                            <label class="custom-control-label" for="customRadio6">Texto</label>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-8 col-xs-12">
                                                    <input type="radio" id="customRadio1" name="customCheckTexto" value="#62844A" class="custom-control-input">
                                                </div>
                                                <div class="col-md-6 col-sm-8 col-xs-12">
                                                    <div style=" width: 20px;height: 20px;background:#62844A;"></div>
                                                </div>
                                                    
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-8 col-xs-12">
                                                    <input type="radio" id="customRadio1" name="customCheckTexto" value="#7CEED5" class="custom-control-input">
                                                </div>
                                                <div class="col-md-6 col-sm-8 col-xs-12">
                                                    <div style="width: 20px;height: 20px;background:#7CEED5;"></div>
                                                </div>
                                            </div>
                                            <div class="custom-control">
                                                <button class="btn btn-primary" type="button" id="submit6">Enviar</buton>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseSeven">
                                        Formulario #7
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="div-collapse">
                                        <div class="col-md-6 col-sm-8 col-xs-12">
                                            <div class="form-group" id="pepe">
                                                <input type="number" class="form-control is-valid" name="ingresoMensual" id="ingresoMensual" placeholder="Ingreso Mensual">
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="checkbox" id="conyugenteCheck" name="conyugenteCheck" class="custom-control-input">
                                                <label class="custom-control-label">Conyugente</label>
                                            </div>
                                            <div class="form-group" id="div-conyugente">
                                                <input type="number" class="form-control is-valid" name="conyugenteIngreso" id="conyugenteIngreso" placeholder="Ingreso conyugente">
                                            </div>
                                            <div class="custom-control">
                                                <button class="btn btn-primary" type="button" id="submit7">Enviar</buton>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapsePe">
                                        Formulario #8
                                    </a>
                                </h4>
                            </div>
                            <div id="collapsePe" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="div-collapse">
                                        <div class="col-md-6 col-sm-8 col-xs-12">
                                            <div class="form-group" id="pepe">
                                                <input type="number" class="form-control is-valid" name="inferior" id="inferior" placeholder="Ingrese inferior">
                                            </div>
                                            <div class="form-group" id="div-conyugente">
                                                <input type="number" class="form-control is-valid" name="superior" id="superior" placeholder="Ingrese superior">
                                            </div>
                                            <div class="custom-control">
                                                <button class="btn btn-primary" type="button" id="submit8">Enviar</buton>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pe">
            <h1>Soy el area de resultado</h1>
            <div class="div-resultados">
                <div class="resultados-form1">
                    <p id="resultado_p" ></p>
                    <p id="nombre_p"></p>
                    <p id="email_p"></p>
                    <p id="telefono_p"></p>
                    <p id="opciones_p"></p>
                    <p id="area_p"></p>
                    <h2 id="capcha"></h2>
                </div>
                <div class="resultados-form2"> 
                    
                </div>
                <div class="resultados-form3"> 
                    
                </div>
                <div class="resultados-form4"> 
                    
                </div>
                <div class="resultados-form5">

                </div>
                <div class="resultados-form7">
                    <p id="1" ></p>
                    <p id="2"></p>
                    <p id="3"></p>
                    <p id="4"></p>
                    <p id="5"></p>
                    <p id="neto"></p>
                    <p id="ingreso"></p>
                </div>
                <div class="resultados-form7dos">
                    <p id="res1"></p>
                    <p id="res2"></p>
                    <p id="res3"></p>
                    <p id="res4"></p>
                    <p id="res5"></p>
                    <p id="res6"></p>
                    <p id="res8"></p>
                    <p id="res9"></p>
                    <p id="res10"></p>
                    <p id="neto_conyu"></p>
                    <p id="ingreso_conyu"></p>
                </div>
                <div class="resultados-form8">

                </div>



            </div> 
        </div>
    </div>
 
<!-- </div> -->


</body>
    <script src="js/dashboard.js"></script>
    <script>
        $(document).ready(function () {
            var aleatorio = (Math.floor(Math.random() * (9999 - 1000 + 1)) + 1000);
            $('#num_aleatorio').val(aleatorio);
            init_dashboard(aleatorio);
        }) 
        $('#limpiar').click(function(){
            $('#pixeles').val('');
        })
        $("#conyugenteIngreso").hide();
        $('#conyugenteCheck').on('change',function(){
            if (this.checked) {
                $("#conyugenteIngreso").show(); 
            } else {
                $("#conyugenteIngreso").hide();
            }
        })
    </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.js"></script>
    <!-- Script para jquery ui -->
    <script src="../jquery/jquery-ui.js"></script>

</html>