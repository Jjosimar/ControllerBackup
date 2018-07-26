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
        <!--Material Icons-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <div class="box box-primary">
            <div class="box-header" style="color: #0075b0">
                <i class="fa fa-home"></i>
                <h2 class="box-title">Lista de Clientes</h2>                                
            </div>
            <div class="box-body" style="height: auto">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h4 class="panel-title">
                                Cliente 1
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <table class="table table-striped table-hover">
                                    <tbody>
                                        <tr>
                                            <td>(vazio)</td>
                                            <td>(vazio)</td>
                                            <td>(vazio)</td>
                                            <td>(vazio)</td>
                                            <td>
                                                <button class="btn btn-success" data-toggle="modal" data-target="#modal-question">
                                                    <i class="fa fa-question"></i>
                                                    &nbsp;Questionário
                                                </button> 
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
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
            
            <div class="modal fade cart-modal" id="modal-question" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                <span aria-hidden="true"><i class="glyphicon glyphicon-remove"></i></span>
                            </button>
                            <h3 class="modal-title">Questionário</h3>
                        </div>
                        <div class="modal-body">
                            corpo do questionario
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
                            <h3 class="modal-title">Cadastro de Cliente</h3>
                        </div>
                        <div class="modal-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#info-tab" data-toggle="tab"><i class="fa fa-info"></i> Dados Principais</a></li>
                                <li><a href="#address-tab" data-toggle="tab"><i class="fa fa-road"></i> Endereço</a></li>
                            </ul>
                            <br/>
                            <form id="accountForm" method="post">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="info-tab">
                                        <div class="form-group col-md-8 col-xs-8">
                                            <label class="control-label">Nome da Empresa:</label>
                                            <input class="form-control" type="text">
                                        </div>

                                        <div class="form-group col-md-6 col-xs-6">
                                            <label class="control-label">Telefone:</label>
                                            <input class="form-control" id="phone" type="text">
                                        </div>

                                        <div class="form-group col-md-6 col-xs-6">
                                            <label for="selection">Celular(opcional):</label>
                                            <input class="form-control" type="email"/>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="address-tab">
                                        <div class="form-group col-md-7 col-xs-7">
                                            <label class="control-label">Município:</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group col-md-4 col-xs-4">
                                            <label class="control-label">Estado:</label>
                                            <select class="form-control" name="estado">
                                                <option value="">Selecione...</option>
                                                <option>AC</option>      <option>AL</option>      <option>AM</option>
                                                <option>AP</option>      <option>BA</option>      <option>CE</option>
                                                <option>DF</option>      <option>ES</option>      <option>GO</option>
                                                <option>MA</option>      <option>MG</option>      <option>MS</option>
                                                <option>MT</option>      <option>PA</option>      <option>PB</option>
                                                <option>PE</option>      <option>PI</option>      <option>PR</option>
                                                <option>RN</option>      <option>RO</option>      <option>RR</option>
                                                <option>RS</option>      <option>SC</option>      <option>SE</option>
                                                <option>SP</option>      <option>TO</option>      
                                            </select>
                                        </div>

                                        <div class="form-group col-md-5 col-xs-5">
                                            <label for="selection">CEP:</label>
                                            <input class="form-control" type="number"/>
                                        </div>

                                        <div class="form-group col-md-6 col-xs-6">
                                            <label for="selection">Complemento:</label>
                                            <textarea class="form-control"></textarea>                                        
                                        </div>

                                        <div class="form-group col-md-11 col-xs-11">
                                            <label for="selection">Observações:</label>
                                            <textarea class="form-control"></textarea>                                        
                                        </div>

<!--                                        <div class="form-group col-md-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                    <b>Abrir Ocorrência</b>
                                                </label>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <div class="col-md-12 col-xs-12">
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
            <!--Script do Pará-->
            <script src="../js/init.js"></script>
            <!--Script de mudança de estado das tabs-->
            <script src="../js/formcontacts.js"></script>
            <!--KC FAB floating button Plugin-->
            <script type="text/javascript" src="js/kc.fab.min.js"></script>
            <!--Floating Button-->
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