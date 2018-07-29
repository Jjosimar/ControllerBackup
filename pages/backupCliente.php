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

        <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>

    </head>
    <?php 
        session_start();
        $logado = $_SESSION['usuario'];
        
    ?>  
    <body>
        <div class="box box-primary">
            <div class="box-header" style="color: #0075b0">
                <i class="fa fa-book"></i>
                <h2 class="box-title">Controler de Backup</h2>
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
              
                <table class="table table-hover">
                        <thead class="bg-blue">
                            <tr>
                                <th "col-md-2 col-xs-8">Nome da Empresa</th>
                                <th "col-md-2 col-xs-8">Ultima data de backup</th>
                            </tr>
                        </thead>  
                </table>
                </br>
                <?php
                    
                        require_once 'Model/cadastroCliente.class.php';
                        
                        $buscar = new cadastroCliente();
                        $contato = $buscar->buscar();

                        if (! empty ( $contato )) {
                            foreach ( $contato as $value ) {
                                if($value->funcUsername == $logado){
                                    //$link = "editar.php?id=" . $value->id;
                    
                            
                ?>
                
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">    
                    <div class="panel panel-default">
                        <div class="panel-heading botao bg-green" style = "cursor: pointer; height: 42px; padding-top: 5px;" name=0 data-toggle="collapse" href="#collapse<?php echo $value->id;?>">
                                <table>
                                    <thead class="panel-title">
                                        <tr>
                                            <th class="col-md-6 col-xs-8"><?php echo $value->nomeEmpresa;?></th>
                                            <th class="col-md-12 col-xs-8"><?php echo $value->dateBackup;?></th>
                                            <th> 
                                                <!--button type="button" data-toggle="modal" data-target="#teste" class="btn btn-danger " data-dismiss="modal" style="width: 100px; height: 30px; margin-top: 0px; position: center;">Excluir</button-->
                                                <a href="#" class="apagar" apagar="<?php echo $value->id;?>" style="font-size: 18px; color: #D50000; text-align: center">
                                                    <i class="material-icons">delete</i>
                                                </a>
                                            </th>
                                        </tr>                                    
                                    </thead>
                                </table>                            
                        </div>
                        <div id="collapse<?php echo $value->id;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">

                                <form id="accountForm" class="form" method="POST" action="pages/Controller/cadastrarCliente.php" enctype="multipart/form-datad">
                                    <input style="display: none;" type="text" value="3" name="tipo" />   
                                    <input style="display: none;" name="id" type="text" value="<?php echo $value->id;?>"                       
                                    <div class="tab-content">
                                            <div class="form-group col-md-4 col-xs-4">
                                                <label class="control-label">Código:</label>
                                                <input class="form-control" type="text" value="<?php echo $value->codigoLiberacao;?>"name="codigoLiberacao">
                                            </div>

                                            <div class="form-group col-md-4 col-xs-4">
                                                <label for="selection">CPF/CNPJ:</label>
                                                <input class="form-control" value="<?php echo $value->cpf_cnpj;?>" type="text" name="cpf_cnpj">
                                            </div>

                                            <div class="form-group col-md-4 col-xs-4">
                                                <label class="control-label">Nome da Empresa:</label>
                                                <input class="form-control" type="text" value="<?php echo $value->nomeEmpresa;?>" name="nomeEmpresa">
                                            </div>

                                            <div class="form-group col-md-4 col-xs-4">
                                                <label class="control-label">Quantidade dos clientes:</label>
                                                <input class="form-control" type="text" value="<?php echo $value->qntCliente;?>" name="qntCliente">
                                            </div>
                                        
                                            <div class="form-group col-md-4 col-xs-4">
                                                <label class="control-label">Situação:</label>
                                                <select class="form-control" name="situacao">
                                                <?php 
                                                    if ($value->situacao == "S")
                                                    {
                                                    echo "<option value=\"S\" selected>Criado</option>
                                                    <option value=\"N\">Não Criado</option>";
                                                    }
                                                    else
                                                    {
                                                    echo "<option value=\"S\">Criado</option>
                                                    <option value=\"N\" selected>Não Criado</option>";
                                                    }
                                                ?>      
                                                </select>
                                            </div> 

                                            <div class="form-group col-md-4 col-xs-4">
                                                <label class="control-label">Ação:</label>
                                                <select class="form-control" name="acao">
                                                <?php 
                                                    if ($value->acao == "Faz")
                                                    {
                                                    echo "<option value=\"Faz\" selected>Faz</option>
                                                    <option value=\"Não Faz\">Não Faz</option>";
                                                    }
                                                    else
                                                    {
                                                    echo "<option value=\"Faz\">Faz</option>
                                                    <option value=\"Não Faz\" selected>Não Faz</option>";
                                                    }
                                                ?>

                                                </select>
                                            </div>                                    

                                            <div class="form-group col-md-4 col-xs-4">
                                                <label class="control-label">Data do Ultimo Backup:</label>
                                                <input class="form-control" type="text" value="<?php echo $value->dateBackup;?>" name="dateBackup">
                                            </div>                       
                                        
                                        <div class="modal-footer">
                                            <div class="col-md-12 col-xs-12">
                                                <button type="submit" class="btn btn-success">Editar</button>
                                                <!--button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button-->
                                            </div>
                                        
                                    </div>
                                </form>   
                            </div>
                        </div>
                    </div>
                </div>
                <?php
		                        }
                            }
                        }
	
	            ?>                        
            </div> 
            <br/>
            <br/>
            <br/>
            <div class="sub_fab_btns_wrapper">
            </div>
            <button data-toggle="modal" data-target="#teste" class="kc_fab_main_btn" style="background-color:#0075b0; width: 50px; height: 50px">
                <span>+</span>
            </button> 
            <!--Modal Cadastro-->
            <?php 
            // if
            ?>
            <div class="modal fade" id="teste" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <i class="glyphicon glyphicon-remove"></i>
                            </button>
                            <h4 class="modal-title" id="modalLabel">Excluir</h4>
                        </div>
                        <div class="modal-body">
                            Deseja realmente cadastrar este Contato?
                        </div>
                        <div class="modal-footer">
                            <button data-toggle="modal" data-target="#add" type="submit" class="btn btn-primary">Sim</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                        </div>
                    </div>
                </div>
            </div> 
            <?php
                            
                require_once 'Model/cadastroUsuario.class.php';
                $buscar = new cadastroUsuario();
                $contato = $buscar->buscar();
                            
                                        
            ?>           
            <div class="modal fade cart-modal" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabell" aria-hidden="true">
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
                            </ul>
                            <br/>
                            <form id="accountForm" class="form" method="POST" action="pages/Controller/cadastrarCliente.php" enctype="multipart/form-datad">
                                <input style="display: none;" type="text" value="2" name="tipo" />
                                <div class="tab-content">
                                    <div class="tab-pane active" id="info-tab">

                                        <div class="form-group col-md-8 col-xs-8">
                                            <label class="control-label">Código:</label>
                                            <input class="form-control"  type="text" name="codigoLiberacao">
                                        </div>

                                        <div class="form-group col-md-4 col-xs-4">
                                            <label class="control-label">Usuário:</label>
                                            <select class="form-control" name="id_usuario">
                                                <option value="">Selecione...</option>
                                                <?php
                                                    if (! empty ( $contato )) {
                                                    foreach ( $contato as $value ) {
                                                ?>
                                                <option value="<?php echo $value->id_usuario;?>"><?php echo $value->id_usuario." - ".$value->funcName ;?></option>         
                                                <?php
                                                        }
                                                    }
                                    
                                                ?>     
                                            </select>
                                        </div> 

                                        <div class="form-group col-md-8 col-xs-8">
                                            <label for="selection">CPF/CNPJ:</label>
                                            <input class="form-control" type="text" name="cpf_cnpj">
                                        </div>
                                        <div class="form-group col-md-4 col-xs-4">
                                            <label class="control-label">Situação:</label>
                                            <select class="form-control" name="situacao">
                                                <option value="">Selecione...</option>
                                                <option Value="S">Criado</option>         
                                                <option value="N">Não Criado</option>         
                                            </select>
                                        </div> 

                                        <div class="form-group col-md-8 col-xs-8">
                                            <label class="control-label">Nome da Empresa:</label>
                                            <input class="form-control" type="text" name="nomeEmpresa">
                                        </div>
                                        <div class="form-group col-md-4 col-xs-4">
                                            <label class="control-label">Ação:</label>
                                            <select class="form-control" name="acao">
                                                <option value="">Selecione...</option>
                                                <option>Faz</option>         
                                                <option>Não Faz</option>         
                                            </select>
                                        </div>                                    

                                        <div class="form-group col-md-8 col-xs-8">
                                            <label class="control-label">Quantidade dos clientes:</label>
                                            <input class="form-control" type="text" name="qntCliente">
                                        </div>

                                        <div class="form-group col-md-4 col-xs-4">
                                            <label class="control-label">Data do Ultimo Backup:</label>
                                            <input class="form-control" type="text" name="dateBackup">
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
                        <button type="submit" class="btn btn-primary apagar" apagar="<?php echo $value->id;?>">Sim
                            
                        </button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                    </div>
                </div>
            </div>
        </div>         
               
        <script type="text/javascript">
              $(".apagar").click(function(){
                var apagar =  $(this).attr("apagar");
            
                var txt;
                var tipo = 4;
                var r = confirm("Apagar!");
                if (r == true) {
                


                $.post("pages/Controller/cadastrarCliente.php",
                        {
                apagar: apagar, 
                tipo:	tipo
                        
                        },
                        function(data, status){
                            alert(data);
                            location.reload();
                        });

                } 
                
            });
        </script>                                           
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
        </script>
        <script type="text/javascript">
              $(".apagar").click(function(){
                var apagar =  $(this).attr("apagar");
            
                var txt;
                var tipo = 4;
                var r = confirm("Apagar!");
                if (r == true) {
                


                $.post("cadastrarCliente.php",
                        {
                apagar: apagar, 
                tipo:	tipo
                        
                        },
                        function(data, status){
                            alert(data);
                            location.reload();
                        });

                } 
                
            });
        </script>
        	
              
    </body>
</html>