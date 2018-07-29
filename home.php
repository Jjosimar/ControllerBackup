<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AppSUPPORT</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
        <!-- FontAwesome 4.3.0 -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />   
        <!-- Theme style -->
        <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />        
        <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!--Material Icons-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <?php
        session_start();
        if ((!isset($_SESSION['usuario']) == true) and ( !isset($_SESSION['senha']) == true)) {
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            header('location:index.php');
        }
        $logado = $_SESSION['usuario'];
    ?>
    <body class="skin-blue">        
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="home.php" class="logo"><b>App</b>SUPPORT</a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="glyphicon glyphicon-user"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="user-body">
                                        <p><?php echo $logado?></p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="index.php" class="btn btn-default btn-flat">Sair</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <ul class="sidebar-menu">
                                                
                         <li class="treeview">
                            <a href="#dado " id="dado">
                            <i class="fa fa-database"></i> <span>Backup Dados</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>                    
                        </li>                            
                        <!--li class="treeview">
                            <a href="#agenda" id="agenda">
                                <i class="fa fa-book"></i> <span>Agenda</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                        </li-->
                                                
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-phone"></i> <span>Atedimento</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="#listaclientes.php" id="atendimento">
                                        <i class="fa fa-home"></i>
                                        Lista de Clientes
                                    </a> 
                                </li>
                                <li>
                                    <a href="#cadperguntas.php" id="cadperguntas">
                                        <i class="fa fa-question"></i>
                                        Cadastro de Perguntas
                                    </a> 
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-plus"></i>
                                <span>Cadastros Gerais</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="#func" id="func">
                                        <i class="fa fa-group"></i>
                                        Cadastro de Funcionários
                                    </a>
                                </li>
                                <!--li>
                                    <a href="#areaadd.php" id="areaadd">
                                        <i class="fa fa-briefcase"></i>
                                        Cadastro de Setor
                                    </a>
                                </li>
                                <li>
                                    <a href="#probadd.php" id="probadd">
                                        <i class="fa fa-exclamation-triangle"></i>
                                        Cadastro de Problema
                                    </a>
                                </li>
                                <li>
                                    <a href="#unidadd.php" id="unidadd">
                                        <i class="fa fa-desktop"></i>
                                        Cadastro de Unidade
                                    </a>
                                </li-->                                
                            </ul>
                        </li>
                        <!--li class="treeview">
                            <a href="#">
                                <i class="fa fa-money"></i> <span>Financeiro</span><i class="fa fa-angle-left pull-right"></i>
                            </a>
                        </li-->
                        <!--li class="treeview">
                            <a href="#">
                                <i class="fa fa-navicon"></i> <span>Ocorrências</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#listtask" id="listtask"><i class="fa fa-list"></i> Lista de Ocorrências</a></li>
                                <li><a href="#mytask" id="mytask"><i class="fa fa-tasks"></i> Minhas Ocorrências</a></li>
                            </ul>
                        </li-->
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-file-text"></i>
                                <span>Relatórios</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-file"></i>
                                         Relatório de Atendimentos
                                    </a>
                                </li>
                            
                                <li>
                                    <a href="#">
                                        <i class="fa fa-file-text"></i>
                                            <span>Controler de Backup</span>
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </a>    
                                
                                    <ul class="treeview">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-file-text"></i>
                                                Com Backup
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-file-text"></i>
                                                Sem Backup
                                            </a>
                                        </li>
                                    </ul>
                                </li>    
                                
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <div class="content-wrapper">
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12 revela">
                            
                        </div>
                    </div>
                </section>
            </div><!-- content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Versão</b> 1.2.7
                </div>
                <strong>Copyright &copy; 2017 <a href="mailto:suporte@devnull.com.br">DevNULL</a></strong>. Todos os Direitos Reservados.
            </footer>            
        </div>
        <!-- jQuery 2.1.3 -->
        <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
        <!-- jQuery UI 1.11.2 -->
        <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/app.min.js" type="text/javascript"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="dist/js/pages/dashboard.js" type="text/javascript"></script>
        <!--Script do Pará-->
        <script src="js/init.js"></script>
    </body>
</html>
