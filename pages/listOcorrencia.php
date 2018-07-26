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
    </head>
    <body>
        <div class="box box-primary">
            <div class="box-header" style="color: #0075b0">
                <i class="fa fa-list"></i>
                <h2 class="box-title">Ocorrências</h2>
                <div class="col-md-3 col-xs-6 pull-right">
                    <div class="input-group">                    
                        <input type="text" class="form-control" placeholder="Buscar">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button"><i class="glyphicon glyphicon-search"></i></button>
                        </span>
                    </div>
                </div>                
            </div>
            <div class="box-body" style="height: auto">                
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <table>
                                <thead class="panel-title">
                                    <tr>
                                        <th>16347</th>
                                        <th class="col-md-5 col-xs-8">Rosa</th>
                                    </tr>                                    
                                </thead>
                            </table>
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
                                                <button class="btn btn-success">
                                                    Encerrar
                                                </button> 
                                                <button class="btn btn-warning">
                                                    Editar
                                                </button> 
                                                <button class="btn btn-primary">
                                                    Encaminhar
                                                </button> 
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <table>
                                <thead class="panel-title">
                                    <tr>
                                        <th>26451</th>
                                        <th class="col-md-5 col-xs-8">Paulo</th>
                                    </tr>                                    
                                </thead>
                            </table>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <table class="table table-striped table-hover">
                                    <tbody>
                                        <tr>
                                            <td>(vazio)</td>
                                            <td>(vazio)</td>
                                            <td>(vazio)</td>
                                            <td>(vazio)</td>
                                            <td>
                                                <button class="btn btn-success">
                                                    Encerrar
                                                </button> 
                                                <button class="btn btn-warning">
                                                    Editar
                                                </button> 
                                                <button class="btn btn-primary">
                                                    Encaminhar
                                                </button> 
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
        
        <!--Modal Cadastro-->
        <div class="modal fade cart-modal" id="modal-add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true"><i class="glyphicon glyphicon-remove"></i></span>
                        </button>
                        <h3 class="modal-title">Cadastro de Ocorrências</h3>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group col-md-5">
                                <label class="control-label">Área Responsável</label>
                                <select class="form-control">
                                    <option>-</option>
                                    <option>Desenvolvimento</option>
                                    <option>Financeiro</option>
                                    <option>Suporte</option>
                                </select>
                            </div>
                            
                            <div class="form-group col-md-5">
                                <label class="control-label">Tipo de Problema</label>
                                <select class="form-control">
                                    <option>-</option>
                                    <option>Instalação</option>
                                    <option>Atendimento Remoto</option>
                                    <option>Correção</option>
                                </select>
                            </div>
                            
                            <div class="form-group col-md-7">
                                <label for="exampleTextarea">Descrição</label>
                                <textarea class="form-control" id="exampleTextarea"></textarea>
                            </div>
                            
                            <div class="form-group col-lg-6">
                                <label for="selection">Responsavel</label>
                                <input class="form-control" type="text"/>
                            </div>                         
                            
                            <div class="form-group col-md-5">
                                <label class="control-label">Local</label>
                                <select class="form-control">
                                    <option>-</option>
                                    <option>Serluz - U1</option>
                                    <option>Serluz - U2</option>
                                    <option>Serluz - U3</option>
                                    <option>Serluz - U4</option>
                                    <option>Serluz - U5</option>
                                </select>
                            </div>
                            <div class="form-group col-md-5">
                                <label class="control-label">Unidade</label>
                                <select class="form-control">
                                    <option>-</option>
                                    <option>Orion</option>
                                    <option>SmartCob</option>
                                    <option>RealMed</option>
                                    <option>MobileSUS</option>
                                </select>
                            </div>
                            <div class="form-group col-md-5">
                                <label class="control-label">Encaminhar para</label>
                                <select class="form-control">
                                    <option>-</option>
                                    <option>Igor</option>
                                    <option>Josimar</option>
                                    <option>Lucas</option>
                                    <option>Marcelo</option>
                                    <option>Nelma</option>
                                </select>
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

