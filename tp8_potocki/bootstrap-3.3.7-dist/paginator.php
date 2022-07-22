<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Index</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- css -->
    <link href="css/index.css" rel="stylesheet">
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
                <img src="img/profile-user.png" class="img2" alt="">
                <span class="span-brand">Alexander Pierce</span>
            </a>
        </div>
    </div>
    <div class="sidebar-bot">
        <div class="div-navbar">
            <div class="cont-background">
                <div class="perfil-alexander user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="img-alexander">
                        <img src="img/profile-user.png" alt="">
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
                    <li><a href="index.html">Usuarios</a></li>
                    <li><a href="paginator.php">Paginator</a></li>
                    <li><a href="login.html">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="div-index">
        <h1>Paginador</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Avatar</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody id='body'>

            </tbody>
        </table>
        <nav aria-label="...">
            <ul class="pagination">
                <li><a href="#" onclick="abrirPagUno()">1 <span class="sr-only"></span></a></li>
                <li><a href="#" onclick="abrirPagDos()">2 <span class="sr-only"></span></a></li>
                <li><a href="#">3 <span class="sr-only"></span></a></li>
                <li><a href="#">4 <span class="sr-only"></span></a></li>
            </ul>
        </nav>
        <h1 id="div-table-post"></h1>
        <table class="table" id="table-posts">
        </table>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
<script>
    $(document).ready(function () {
        $.ajax({
            url: 'https://reqres.in/api/users?page=1',
            type: "GET",
            data: {},
            async: false,
            dataType: 'json',
            success: function (data) {
                data = data.data;
                html = '';
                for (i = 0; i < data.length; i++) {
                    html += '<tr><td align="center">' + data[i].id + '</td>';
                    html += '<td align="center">' + data[i].first_name + '</td>';
                    html += '<td align="center">' + data[i].last_name + '</td>';
                    html += '<td align="center">' + data[i].email + '</td>';
                    html += '<td><img id="profile-img-json" class="profile-img-card" src="'+data[i].avatar+'" /></td>';
                    html += '<td><button type="button" class="btn btn-primary" onclick=abrirPosts('+data[i].id +','+'"'+data[i].first_name+'"' + ')>posts</button></td>';
                    html += '</tr>';
                }
                $('#body').html(html);
            }
        });
    });
</script>
<script>
    function abrirPagUno(){
        $.ajax({
            url: 'https://reqres.in/api/users?page=1',
            type: "GET",
            data: {},
            async: false,
            dataType: 'json',
            success: function (data) {
                data = data.data;
                html = '';
                for (i = 0; i < data.length; i++) {
                    html += '<tr><td align="center">' + data[i].id + '</td>';
                    html += '<td align="center">' + data[i].first_name + '</td>';
                    html += '<td align="center">' + data[i].last_name + '</td>';
                    html += '<td align="center">' + data[i].email + '</td>';
                    html += '<td><img id="profile-img-json" class="profile-img-card" src="'+data[i].avatar+'" /></td>';
                    html += '<td><button type="button" class="btn btn-primary">posts</button></td>';
                    html += '</tr>';
                }
                $('#body').html(html);
            }
        });
    }
    function abrirPagDos(){
        $.ajax({
            url: 'https://reqres.in/api/users?page=2',
            type: "GET",
            data: {},
            async: false,
            dataType: 'json',
            success: function (data) {
                data = data.data;
                html = '';
                for (i = 0; i < data.length; i++) {
                    html += '<tr><td align="center">' + data[i].id + '</td>';
                    html += '<td align="center">' + data[i].first_name + '</td>';
                    html += '<td align="center">' + data[i].last_name + '</td>';
                    html += '<td align="center">' + data[i].email + '</td>';
                    html += '<td><img id="profile-img-json" class="profile-img-card" src="'+data[i].avatar+'" /></td>';
                    html += '<td><button type="button" class="btn btn-primary">posts</button></td>';
                    html += '</tr>';
                }
                $('#body').html(html);
            }
        });
    }

    function abrirPosts(id,nombre){
        $.ajax({
            url: 'https://jsonplaceholder.typicode.com/users/'+id+'/posts',
            type: "GET",
            data: {},
            async: false,
            dataType: 'json',
            
            success: function (data) {
                console.log(nombre);
                html = '';
                
                html += '<thead>';
                html += '<tr><th scope="col">Id</th><th scope="col">Titulo</th><th scope="col"></th><th scope="col">Cuerpo del Post</th><th scope="col"></th><th scope="col">Acciones</th></tr></thead><tbody>';
                for (i = 0; i < data.length; i++) {
                    html += '<tr><td align="center">' + data[i].id + '</td>';
                    html += '<td align="center">' + data[i].title + '</td>';
                    html += '<td align="center"></td>';
                    html += '<td>'+data[i].body+'</td>';
                    html += '<td align="center"></td>';
                    html += '<td><button type="button" class="btn btn-primary" onclick="agregarComentario(\'' + data[i].id + '\')">Comentarios</button></td>';
                    html += '</tr>';  
                    html += '<tr id="id-' + data[i].id+'" style="display:none"></tr>' 
                    
                }
                html += '</tbody>';
                // console.log(html);
                $('#table-posts').html(html);
                h1='';
                h1 += 'Paginador: '+nombre;
                $('#div-table-post').html(h1);
            }
        });
    }
    function agregarComentario(id){
        $.ajax({
            url: 'https://jsonplaceholder.typicode.com/posts/'+id+'/comments',
            type: "GET",
            data: {},
            async: false,
            dataType: 'json', 
            success: function (data) {
                html = '';
                html += '<td colspan="5"><table class="table" id="comentario'+id+'"><thead><tr><th scope="col">Id</th><th scope="col">Name</th><th scope="col">Email</th><th scope="col">Body</th></tr></thead><tbody>';
                for (i = 0; i < data.length; i++) {
                    html += '<tr><td align="center">' + data[i].id + '</td>';
                    html += '<td align="center">' + data[i].name + '</td>';
                    html += '<td>'+data[i].email+'</td>';
                    html += '<td>'+data[i].body+'</td>';
                    html += '</tr>';   
                }
                html += '</tbody>';
                html += '</table></td>';
                $('#id-'+id).html(html);
                
                //Esconder la tabla generada
                var dis = document.getElementById('id-'+id); 
                dis.style.display = (dis.style.display == 'none') ? 'revert' : 'none';
            }
            
        });
    }
</script>
</html>