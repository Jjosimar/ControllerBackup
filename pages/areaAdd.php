<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- Bootstrap 3.3.2 -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
        <!-- FontAwesome 4.3.0 -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />    
        <!-- Theme style -->
        <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skin-->
        <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!--KC FAB floating button-->
        <link href="css/kc.fab.css" rel="stylesheet" type="text/css"/>
        <!-- Material Icon-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <div class="box box-primary">
            <div class="box-header" style="color: #0075b0">
                <i class="fa fa-briefcase"></i>
                <h2 class="box-title">Setor de Trabalho</h2>
                <div class="col-lg-3 col-xs-8 pull-right">
                    <div class="input-group">                    
                        <input type="text" class="form-control" placeholder="Buscar">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button"><i class="glyphicon glyphicon-search"></i></button>
                        </span>
                    </div>
                </div>                
            </div>
            <div class="box-body" style="height: auto">
                <table class="table table-striped table-hover">
                    <thead class="bg-blue">
                        <tr>
                            <th>Descrição</th>
                            <th>Responsável</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Desenvolvimento</td>
                            <td>Marcelo Henrique</td>
                            <td>
                                <a href="#" title="Editar" data-toggle="modal" data-target="#modal-add" style="font-size: 18px; color: #0075b0; text-align: center">
                                    <i class="material-icons">edit</i>
                                </a>&nbsp;&nbsp;
                                <a href="#" title="Excluir" data-toggle="modal" data-target="#delete-modal" style="font-size: 18px; color: #D50000; text-align: center">
                                    <i class="material-icons">delete</i>
                                </a>  
                            </td>

                        </tr>
                        <tr>
                            <td>Desenvolvimento</td>
                            <td>Marcelo Henrique</td>
                            <td>
                                <a href="#" title="Editar" data-toggle="modal" data-target="#modal-add" style="font-size: 18px; color: #0075b0; text-align: center">
                                    <i class="material-icons">edit</i>
                                </a>&nbsp;&nbsp;
                                <a href="#" title="Excluir" data-toggle="modal" data-target="#delete-modal" style="font-size: 18px; color: #D50000; text-align: center">
                                    <i class="material-icons">delete</i>
                                </a>  
                            </td>

                        </tr>
                        <tr>
                            <td>Desenvolvimento</td>
                            <td>Marcelo Henrique</td>
                            <td>
                                <a href="#" title="Editar" data-toggle="modal" data-target="#modal-add" style="font-size: 18px; color: #0075b0; text-align: center">
                                    <i class="material-icons">edit</i>
                                </a>&nbsp;&nbsp;
                                <a href="#" title="Excluir" data-toggle="modal" data-target="#delete-modal" style="font-size: 18px; color: #D50000; text-align: center">
                                    <i class="material-icons">delete</i>
                                </a>  
                            </td>

                        </tr>
                        <tr>
                            <td>Desenvolvimento</td>
                            <td>Marcelo Henrique</td>
                            <td>
                                <a href="#" title="Editar" data-toggle="modal" data-target="#modal-add" style="font-size: 18px; color: #0075b0; text-align: center">
                                    <i class="material-icons">edit</i>
                                </a>&nbsp;&nbsp;
                                <a href="#" title="Excluir" data-toggle="modal" data-target="#delete-modal" style="font-size: 18px; color: #D50000; text-align: center">
                                    <i class="material-icons">delete</i>
                                </a>  
                            </td>

                        </tr>
                        <tr>
                            <td>Desenvolvimento</td>
                            <td>Marcelo Henrique</td>
                            <td>
                                <a href="#" title="Editar" data-toggle="modal" data-target="#modal-add" style="font-size: 18px; color: #0075b0; text-align: center">
                                    <i class="material-icons">edit</i>
                                </a>&nbsp;&nbsp;
                                <a href="#" title="Excluir" data-toggle="modal" data-target="#delete-modal" style="font-size: 18px; color: #D50000; text-align: center">
                                    <i class="material-icons">delete</i>
                                </a>  
                            </td>

                        </tr>
                    </tbody>

                </table>                
            </div>
            <br/>
            <br/>
            <br/>
            <div class="sub_fab_btns_wrapper">
            </div>
            <button data-toggle="modal" data-target="#modal-add" class="kc_fab_main_btn" style="background-color:#0075b0; width: 50px; height: 50px">
                <span>+</span>
            </button> 

        </div>

        <!--Modal Exclusão-->
        <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <i class="glyphicon glyphicon-remove" style="color: #D50000"></i>
                        </button>
                        <h4 class="modal-title" id="modalLabel">Excluir</h4>
                    </div>
                    <div class="modal-body">
                        Deseja realmente excluir este Setor?
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Sim</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal Cadastro-->
        <div class="modal fade cart-modal" id="modal-add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true"><i class="glyphicon glyphicon-remove"></i></span>
                        </button>
                        <h3 class="modal-title">Cadastro de Setor</h3>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group col-md-8">
                                <label class="control-label">Descrição:</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group col-md-8">
                                <label class="control-label">Responsável:</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="modal-footer">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-success">Cadastrar</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Modal Problema-->
        <div class="modal fade cart-modal" id="modal-add-problem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true"><i class="glyphicon glyphicon-remove"></i></span>
                        </button>
                        <h3 class="modal-title">Cadastro de Problema</h3>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group col-md-8">
                                <label class="control-label">Descrição:</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="modal-footer">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-success">Cadastrar</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js" type="text/javascript"></script>
        <!--Script do Pará-->
        <script src="js/init.js"></script>
        <!--KC FAB floating button Plugin-->
        <script type="text/javascript" src="js/kc.fab.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                var links = [
                    {
                        "bgcolor": "blue",
                        "icon": "+"
                    }
                ];
                $('.kc_fab_wrapper').kc_fab(links);
            });
        </script>
    </body>
</html>



