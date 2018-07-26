<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>App Suport</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../../assets/css/materialize.css" type="text/css" rel="stylesheet"/>
        <link href="../../assets/css/materialize.min.css" type="text/css" rel="stylesheet"/>
        <link href="../../assets/css/style.css" type="text/css" rel="stylesheet"/>
    </head>
    <body id="fundo-login">
        <nav class="green lighten-1" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="#" class="brand-logo">App Suport</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="registeruser.php">Cadastrar</a></li>
                    <li><a href="home-modules.php">Home</a></li>
                </ul>

                <ul id="nav-mobile" class="side-nav">
                    <li><a href="pages/registeruser.php">Cadastrar</a></li>
                    <li><a href="../../index.php">Home</a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse">
                    <i class="material-icons">menu</i>
                </a>
            </div>
        </nav>
        <div class="row">
            <div class="col s12 m7">
                <div class="card-panel login">
                    <div class="card-content">
                        <!--div class="logo">
                           <img src="assets/img/logo.png"/>
                        </div-->
                        <div class="row">
                            <form class="col s12" method='POST' action="Controller/logando.php">
                                <div class="row">
                                    <div class="input-field col s9">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="username" type="text" class="validate" name="usu_username">
                                        <label for="username">Username</label>
                                    </div><br><br><br><br>
                                    <div class="input-field col s9">
                                        <i class="material-icons prefix">lock_outline</i>
                                        <input id="senha" type="password" class="validate" name="usu_senha">
                                        <label for="senha">Senha</label>
                                    </div>
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Entrar
                                        <i class="material-icons right">send</i>
                                    </button>
                                </div>
                            </form>
                            <a href="home-modules.html"><button class="btn waves-effect waves-light">Entrar
                                <i class="material-icons right">send</i>
                            </button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="../../assets/js/materialize.js"></script>
        <script src="../../assets/js/init.js"></script>
    </body>
</html>
