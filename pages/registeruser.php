<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>App Suport</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../css/materialize.min.css" type="text/css" rel="stylesheet" />
        <link href="../css/style.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <nav class="green lighten-1" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="#" class="brand-logo">App Suport</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../pages/userlogin.html">Login</a></li>
                </ul>

                <ul id="nav-mobile" class="side-nav">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../pages/userlogin.html">Login</a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse">
                    <i class="material-icons">menu</i>
                </a>
            </div>
        </nav>
        
        <div class="row">
            <div class="col s12 m7">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Cadastro</span>
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s7">
                                        <input id="nome" type="text" class="validate">
                                        <label for="nome">Nome</label>
                                    </div>
                                    
                                    <div class="input-field col s7">
                                        <select>
                                            <option value="" disabled selected>Selecione...</option>
                                            <option value="1">Administrador</option>
                                            <option value="2">Gerente</option>
                                            <option value="3">Manutenção</option>
                                            <option value="4">Recurso Humanos</option>
                                        </select>
                                        <label>Cargo</label>
                                    </div>
                                    
                                    <div class="input-field col s7">
                                        <input id="username" type="text" class="validate">
                                        <label for="username">Username</label>
                                    </div>
                                    
                                    <div class="input-field col s7">
                                        <input id="email" type="email" class="validate">
                                        <label for="email">E-mail</label>
                                    </div>
                                    
                                    <div class="input-field col s7">
                                        <input id="senha" type="password" class="validate">
                                        <label for="senha">Senha</label>
                                    </div>
                                    
                                    <div class="input-field col s7">
                                        <input id="submit" type="submit" class="waves-effect waves-light btn" value="Cadastrar">
                                    </div>
                                    
                                    <div class="input-field col">
                                        <input id="reset" type="reset" class="waves-effect orange waves-light btn" value="Limpar">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="../js/materialize.js"></script>
        <script src="../js/init.js"></script>
    </body>
</html>
