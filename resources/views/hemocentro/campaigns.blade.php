@extends('layouts.hemocentro')

@section('title')
Campanhas
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

          <div>
            <a class="btn btn-primary" href="{{route('hemocentro.campaigns.new')}}" role="button">
                Publicar Campanha
            </a>
          </div> 
         
        </a>  

      </div>
      <!--formulario usuarios -->
      <div>
      <!-- general form elements -->
     <div class="table-responsive col-md-12">
<table class="table table-striped" cellspacing="0" cellpadding="0">
  <thead>
      <tr>
          <th>ID</th>
          <th>Titulo</th>
          <th>Data de Criação</th>
          <th class="actions">Ações</th>
       </tr>
  </thead>
  <tbody>
      @foreach($campanhas as $campanha)  
      <tr>
          <td>{{$campanha->id}}</td>
          <td>{{$campanha->titulo}}</td>
          <td>{{$campanha->created_at}}</td>
          <td class="actions">
              <a class="btn btn-warning btn-xs" href="{{route('hemocentro.campaigns.edit', ['id' => $campanha->id])}}">Editar</a>
              <a class="btn btn-danger btn-xs"  data-toggle="modal" data-target="#delete-modal">Excluir</a>
          </td>
      </tr>
    @endforeach
      
  </tbody>
</table>
<h1></h1>
</div>
    <div class="box-footer"></div>
</section>
@endsection
