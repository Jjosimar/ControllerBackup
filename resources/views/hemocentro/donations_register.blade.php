@extends('layouts.hemocentro')

@section('title')
Doação
@endsection

@section('subtitle')
Painel de Controle do Hemocentro
@endsection

@section('site-content')
<section class="content">

          <!-- /.row -->
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Informações do Registro da Doação</h3>
                </div>
                <!--formulario usuarios -->
                <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">

                          <!-- form start -->
                <form role="form">
                  <div class="box-body">

                    <div class="form-group">
                      <label for="exampleInputEmail1">Data</label>
                      <input type="date" class="form-control" id="exampleInputHemocentro1">
                    </div>
                    <div class="form-group" >
                      <label for="exampleInputEmail1">Nº da Bolsa</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Insira o numero da bolsa">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Selecione o(s) tipo(s) sanguíneo(s): </label>
                      <br/>
                      <select name="tipo-sangue" class="form-control" multiple id="tipo-sangue">
                            <option value="A+" selected=>A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB+</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                      </select>
                    </div>

                </div>                  
              </form>
            </div>  
          </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Registrar Doação</button>
              </div>
        </section>
@endsection
