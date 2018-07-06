@extends('layouts.hemocentro')
@section('title')
Perfil do Hemocentro
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
        <h3 class="box-title">Gerenciamento de Campanha</h3>
      </div>
      <!--formulario usuarios -->
      <div class="col-md-13">
      <!-- general form elements -->
      <div class="box box-primary">

                <!-- form start -->
      <form role="form" method="POST" action="{{ $action == 'new' ? route('hemocentro.campaigns.insert') : route('hemocentro.campaigns.update') }}">
        @csrf
        <input type="hidden" name="id" value="{{$action == 'edit' ? $campanha->id : ''}}">
        
        <div class="box-body">

            <div class="form-group">
                <label for="exampleInputEmail1">Titulo</label>
                <input type="text"name="titulo" class="form-control" placeholder="Insira o titulo da Campanha" value="{{$action == 'edit' ? $campanha->titulo : ''}}">
                
                                @if ($errors->has('titulo'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('titulo') }}</strong>
                                    </span>
                                @endif
                
            </div>
            <div class="form-group" >
                <label for="exampleInputEmail1">Texto</label>
                <input type="text" name="texto" class="form-control" placeholder="Insira o texto sobre a campanha" value="{{$action == 'edit' ? $campanha->texto : ''}}">
                
                                @if ($errors->has('texto'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('texto') }}</strong>
                                    </span>
                                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Selecione os tipos sanguíneo: </label>
                <br/>
                <select name="tipoSang[]" class="form-control" multiple id="tipo-sangue">
                    @foreach($tipo_sangue as $tps)
                        <option value="{{$tps['id']}}" {{ $action == 'edit' ? ($tps['selected'] ? "selected" : "" ) : ''}}>{{$tps['id']}}</option>
                    @endforeach
               
                </select>
                
                                @if ($errors->has('tipoSang'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('tipoSang') }}</strong>
                                    </span>
                                @endif
            </div>

        </div>  
        <div class="box-footer">
           <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
  </div>  
</div>
</section>
@endsection
