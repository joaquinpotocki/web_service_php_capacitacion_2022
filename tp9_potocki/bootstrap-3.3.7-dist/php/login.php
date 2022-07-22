<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div class="container">
        <div class="card card-container">
            <div class="div-group">
                <h3>SIGN IN</h3>
                <img id="profile-img" class="profile-img-card" src="../img/profile-user.png" />
                <p id="profile-name" class="profile-name-card"></p>
                <div class="div-form">
                    <form class="form-signin">
                        <span id="reauth-email" class="reauth-email"></span>
                        <div class="col-xs-12">
                            <!-- puse -12 porque ya de ahi para arriba agarra -->
                            <input type="email" id="inputEmail" class="form-control input1" placeholder="user" required
                                autofocus>
                        </div>
                        <div class="col-xs-12 ">
                            <input type="password" id="inputPassword" class="form-control input2" placeholder="password"
                                required>
                        </div>
                        <div id="remember" class="checkbox">
                            <label for="">
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <div class="div-boton">
                            <a href="index.php" class="btn btn-lg btn-primary btn-block btn-signin boton"> Sign in</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="forgot">
                <a href="index.html" class="forgot-password">
                    Forgot the password?
                </a>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>