@extends('layouts.hemocentro')

@section('title')
Perfil do Usuário
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
        <h3 class="box-title">Informações do hemocentro</h3>
      </div>
      <!--formulario usuarios -->
      <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">

      <!-- form start -->
      <form role="form" method="POST" action="{{ route('hemocentro.user.profile.edit')}}">
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Nome</label>            
            <input type="text" class="form-control" name="name"  placeholder="Insira o nome do usuario responsavel" value="{{$user->name}}">
          </div>
          <div class="form-group" >
            <label for="exampleInputEmail1">E-mail</label>
            <input type="email" class="form-control" name="email"  placeholder="Insira um email" value="{{$user->email}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" name="password_hemocentro" placeholder="Insira a Nova Senha Se For Necessario altera-lo">
          </div>

      </div>                  
    </form>
  </div>  
</div>

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Alterar</button>
    </div>
</section>
@endsection
