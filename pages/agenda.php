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
                <i class="fa fa-book"></i>
                <h2 class="box-title">Agenda</h2>
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
                <?php
                    
                        require_once 'Model/cadastroCliente.class.php';
                        
                        $buscar = new cadastroCliente();
                        $contato = $buscar->buscar();

                        if (! empty ( $contato )) {
                            foreach ( $contato as $value ) {
                                $link = "editar.php?id=" . $value->id;
                    
                            
                ?>            
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading botao" style = "cursor: pointer;" name=0 data-toggle="collapse" href="#collapse<?php echo $value->id;?>">
                                <table>
                                    <thead class="panel-title">
                                        <tr>
                                            <th><?php echo $value->nomeEmpresa;?></th>
                                            <th class="col-md-5 col-xs-8"><?php echo $value->dateBackup;?></th>
                                        </tr>                                    
                                    </thead>
                                </table>                            
                        </div>
                        <div id="collapse<?php echo $value->id;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <table class="table table-striped table-hover">
                                    <tbody>
                                        <tr>
                                            <td><?php echo $value->dateBackup;?></td>
                                            <td><?php echo $value->dateBackup;?></td>
                                            <td><?php echo $value->dateBackup;?></td>
                                            <td><?php echo $value->dateBackup;?></td>
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
                <?php
		                }
	                }
	
	            ?>          

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
                            <i class="glyphicon glyphicon-remove"></i>
                        </button>
                        <h4 class="modal-title" id="modalLabel">Excluir</h4>
                    </div>
                    <div class="modal-body">
                        Deseja realmente excluir este Contato?
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
                        <h3 class="modal-title">Cadastro de Contato</h3>
                    </div>
                    <div class="modal-body">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#info-tab" data-toggle="tab"><i class="fa fa-info"></i> Dados Principais</a></li>
                            <li><a href="#contact-tab" data-toggle="tab"><i class="fa fa-phone"></i> Contato</a></li>
                            <li><a href="#address-tab" data-toggle="tab"><i class="fa fa-road"></i> Endereço</a></li>
                        </ul>
                        <br/>
                        <form id="accountForm" class="form" method="POST" action="http://localhost/app/AppSuport/pages/Controller/cadastrarContatos.php" enctype="multipart/form-datad">
                            <input style="display: none;" type="text" value="2" name="tipo" />
                            <div class="tab-content">
                                <div class="tab-pane active" id="info-tab">
                                    <div class="form-group col-md-8 col-xs-8">
                                        <label class="control-label">Nome da Empresa:</label>
                                        <input class="form-control" type="text" name="nomeEmpresa">
                                    </div>

                                    <div class="form-group col-md-8 col-xs-8">
                                        <label class="control-label">Nome do Proprietário:</label>
                                        <input class="form-control" id="phone" type="text" name="nomeProprietario">
                                    </div>

                                    <div class="form-group col-md-8 col-xs-8">
                                        <label for="selection">E-mail:</label>
                                        <input class="form-control" type="email" name="email"/>
                                    </div>
                                    
                                    <div class="form-group col-md-8 col-xs-8">
                                        <label for="selection">CPF/CNPJ:</label>
                                        <input class="form-control" type="text" name="cpf_cnpj">
                                    </div>
                                </div>

                                <div class="tab-pane" id="contact-tab">
                                    <div class="form-group col-md-8 col-xs-8">
                                        <label class="control-label">Telefone:</label>
                                        <input class="form-control" type="text" name="telefone">
                                    </div>

                                    <div class="form-group col-md-8 col-xs-8">
                                        <label for="selection">Celular (opcional):</label>
                                        <input class="form-control" type="text" name="celular"/>
                                    </div>

                                    <div class="form-group col-md-8 col-xs-8">
                                        <label for="selection">Skype:</label>
                                        <input class="form-control" type="text" name="skype"/>
                                    </div>
                                </div>
                                
                                <div class="tab-pane" id="address-tab">
                                    <div class="form-group col-md-7 col-xs-7">
                                        <label class="control-label">Município:</label>
                                        <input class="form-control" type="text" name="municipio">
                                        <!--Rua, Numero, Cep, estado, municipio, bairro-->
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
                                        <input class="form-control" type="text" name="cep"/>
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-xs-6">
                                        <label for="selection">Qd./Lt./Nº:</label>
                                        <input type="text" class="form-control" name="complemento"/>                                        
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-xs-6">
                                        <label for="selection">Bairro:</label>
                                        <input class="form-control" type="text" name="bairro"/>
                                    </div>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

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

            $(".botao").click(function(){
                var name = $(this).attr("name");
                $(".mostrar" + name).toggle();
            });
        </script>
        	
           
    </body>
</html>

