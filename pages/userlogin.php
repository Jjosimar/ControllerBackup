<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>App Suport - Login</title>
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
        <!-- FontAwesome 4.3.0 -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <style>
            body {
                padding-top: 40px;
                padding-bottom: 40px;
                background-image:url("../img/blurred.jpg");
                background-repeat: no-repeat;
            }
            
            .container{
                padding-top: 100px
            }

            .form-signin {
                max-width: 330px;
                padding: 15px;
                margin: 0 auto;
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
                margin-bottom: 10px;
            }
            .form-signin .checkbox {
                font-weight: normal;
            }
            .form-signin .form-control {
                position: relative;
                height: auto;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                padding: 10px;
                font-size: 16px;
            }
            .form-signin .form-control:focus {
                z-index: 2;
            }
            .form-signin input[type="email"] {
                margin-bottom: -1px;
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;
            }
            .form-signin input[type="password"] {
                margin-bottom: 10px;
                border-radius: 3px;
            }
            #lembrarsenha{
                color: #fff;
            }
            .form-signin-heading{
                font-size: 30px
            }
        </style>
    </head>
    <body>        
        <div class="container">            
            <form class="form-signin">
                <h3 class="form-signin-heading" style="text-align: center; color: #fff;"><b>App</b>SUPPORT</h3>
                <br/>
                <label for="inputEmail" class="sr-only">Username</label>
                <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username" required="">
                <br/>
                <label for="inputPassword" class="sr-only">Senha</label>
                <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required="">
                <div class="checkbox">
                    <label id="lembrarsenha">
                        <input type="checkbox"> Lembrar Senha
                    </label>
                </div>
                <a href="../home.php" style="text-decoration: none">
                    <button id="btnSubmit" class="btn btn-lg btn-primary btn-block" type="button">Entrar</button>
                </a>
            </form>
        </div>
        
        
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <!-- jQuery 2.1.3 -->
        <script src="../plugins/jQuery/jQuery-2.1.3.min.js"></script>
        
    </body>
        
</html>
