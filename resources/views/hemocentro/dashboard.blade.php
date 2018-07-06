@extends('layouts.hemocentro')

@section('title')
Dashboard
@endsection

@section('subtitle')
Painel de Controle do Hemocentro
@endsection

@section('site-content')
<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>8</h3>

              <p>Novos Doadores</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Porcentagem de doações</p>
            </div>
            <div class="icon">
              <i class="ion ion-waterdrop"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Doadores Registrados</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>3</h3>

              <p>Campanhas Ativas</p>
            </div>
            <div class="icon">
              <i class="ion ion-speakerphone"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Doadores em campanhas</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nome do doador: activate to sort column descending">Nome do doador</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Data da doação: activate to sort column ascending">Data da doação</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Tipo sanguíneo : activate to sort column ascending">Tipo sanguíneo </th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Ação: activate to sort column ascending">Ação</th></tr>
                </thead>
                <tbody>



                <tr role="row" class="odd">
                  <td class="sorting_1">Lucas Andrade</td>
                  <td>10/03/2017</td>
                  <td>AB positivo</td>
                  <td>Apto para nova doação</td>
                  <td><button type="button" class="btn btn-block btn-default">Sangue utilizado</button></td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Josimar Mazola</td>
                  <td>13/03/2018</td>
                  <td>A positivo</td>
                  <td>Recuperação</td>
                  <td><button type="button" class="btn btn-block btn-default">Sangue utilizado</button></td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1">Vitor Silva</td>
                  <td>20/01/2018</td>
                  <td>B positivo</td>
                  <td>Apto para nova doação</td>
                  <td><button type="button" class="btn btn-block btn-default">Sangue utilizado</button></td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Gabriel Dias</td>
                  <td>15/09/2017</td>
                  <td>O negativo</td>
                  <td>Apto para nova doação</td>
                  <td><button type="button" class="btn btn-block btn-default">Sangue utilizado</button></td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1">Samuel Souza</td>
                  <td>20/08/2016</td>
                  <td>AB positivo</td>
                  <td>Apto para nova doação</td>
                  <td><button type="button" class="btn btn-block btn-default">Sangue utilizado</button></td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Erico Junior</td>
                  <td>15/02/2018</td>
                  <td>O negativo</td>
                  <td>Recuperação</td>
                  <td><button type="button" class="btn btn-block btn-default">Sangue utilizado</button></td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1">Millys Fabrielle</td>
                  <td>19/03/2018</td>
                  <td>A positivo</td>
                  <td>Recuperação</td>
                  <td>
                  <button type="button" class="btn btn-block btn-default">Sangue utilizado</button>
                  </td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Marcelo Cardoso</td>
                  <td>22/05/2015</td>
                  <td>O negativo</td>
                  <td>Apto para nova doação</td>
                  <td><button type="button" class="btn btn-block btn-default">Sangue utilizado</button></td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1">Marcio Mariano</td>
                  <td>13/03/2017</td>
                  <td>AB positivo</td>
                  <td>Apto para nova doação</td>
                  <td><button type="button" class="btn btn-block btn-default">Sangue utilizado</button></td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Luciana Nish</td>
                  <td>12/01/2018</td>
                  <td>A positivo</td>
                  <td>Recuperação</td>
                  <td><button type="button" class="btn btn-block btn-default">Sangue utilizado</button></td>
                </tr></tbody>
                <tfoot>
                <tr><th rowspan="1" colspan="1">Nome do doador</th><th rowspan="1" colspan="1">Data da doação</th><th rowspan="1" colspan="1">Tipo sanguíneo </th><th rowspan="1" colspan="1">Status</th><th rowspan="1" colspan="1">Ação</th></tr>
                </tfoot>
              </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Página 1 de 57</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Anterior</a></li><li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Próxima</a></li></ul></div></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </section>
@endsection
