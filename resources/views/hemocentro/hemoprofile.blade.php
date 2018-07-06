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
        <h3 class="box-title">Informações do hemocentro</h3>
      </div>
      <!--formulario usuarios -->
      <div class="col-md-13">
      <!-- general form elements -->
      <div class="box box-primary">

                <!-- form start -->
      <form role="form" method="POST" action="{{ route('hemocentro.profile.edit') }}">
        @csrf
        <div class="box-body">  
        <input type="hidden" name="id" value="{{$hemocentro->id}}">                                                                                        
          <div class="form-group">
          
            <label for="exampleInputEmail1">Hemocentro</label>
            <input type="text" class="form-control" name="name" id="exampleInputHemocentro1"  placeholder="Insira o nome do Hemocentro" value="{{$hemocentro->name}}">
            @if($errors->has('name'))
                <span class="text-input-error">
                    <strong>{{$errors->first('name')}}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Endereço</label>
            <input type="text" class="form-control" name="address" id="exampleInputPassword1" placeholder="Insira o endereço onde se localiza o hemocentro" value="{{$hemocentro->address}}">
            @if($errors->has('address'))
                <span class="text-input-error">
                    <strong>{{$errors->first('address')}}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">E-mail</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Insira um email" value="{{$hemocentro->email}}">
            @if($errors->has('email'))
                <span class="text-input-error">
                    <strong>{{$errors->first('email')}}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Cidade</label>
            <input type="text" class="form-control" name="city"  id="exampleInputPassword1" placeholder="Insira a cidade onde se localiza o hemocentro" value="{{$hemocentro->city}}">
            @if($errors->has('city'))
                <span class="text-input-error">
                    <strong>{{$errors->first('city')}}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Estado</label>
          
            <select name="state">
                  <option {{$hemocentro->state == "AC" ? "selected" : ""}} value="AC">Acre</option>
                  <option {{$hemocentro->state == "AL" ? "selected" : ""}} value="AL">Alagoas</option>
                  <option {{$hemocentro->state == "AP" ? "selected" : ""}} value="AP">Amapá</option>
                  <option {{$hemocentro->state == "AM" ? "selected" : ""}} value="AM">Amazonas</option>
                  <option {{$hemocentro->state == "BA" ? "selected" : ""}} value="BA">Bahia</option>
                  <option {{$hemocentro->state == "CE" ? "selected" : ""}} value="CE">Ceará</option>
                  <option {{$hemocentro->state == "DF" ? "selected" : ""}} value="DF">Distrito Federal</option>
                  <option {{$hemocentro->state == "ES" ? "selected" : ""}} value="ES">Espírito Santo</option>
                  <option {{$hemocentro->state == "GO" ? "selected" : ""}} value="GO">Goiás</option>
                  <option {{$hemocentro->state == "MA" ? "selected" : ""}} value="MA">Maranhão</option>
                  <option {{$hemocentro->state == "MT" ? "selected" : ""}} value="MT">Mato Grosso</option>
                  <option {{$hemocentro->state == "MS" ? "selected" : ""}} value="MS">Mato Grosso do Sul</option>
                  <option {{$hemocentro->state == "MG" ? "selected" : ""}} value="MG">Minas Gerais</option>
                  <option {{$hemocentro->state == "PA" ? "selected" : ""}} value="PA">Pará</option>
                  <option {{$hemocentro->state == "PB" ? "selected" : ""}} value="PB">Paraíba</option>
                  <option {{$hemocentro->state == "PR" ? "selected" : ""}} value="PR">Paraná</option>
                  <option {{$hemocentro->state == "PE" ? "selected" : ""}} value="PE">Pernambuco</option>
                  <option {{$hemocentro->state == "PI" ? "selected" : ""}} value="PI">Piauí</option>
                  <option {{$hemocentro->state == "RJ" ? "selected" : ""}} value="RJ">Rio de Janeiro</option>
                  <option {{$hemocentro->state == "RN" ? "selected" : ""}} value="RN">Rio Grande do Norte</option>
                  <option {{$hemocentro->state == "RS" ? "selected" : ""}} value="RS">Rio Grande do Sul</option>
                  <option {{$hemocentro->state == "RO" ? "selected" : ""}} value="RO">Rondônia</option>
                  <option {{$hemocentro->state == "RR" ? "selected" : ""}} value="RR">Roraima</option>
                  <option {{$hemocentro->state == "SC" ? "selected" : ""}} value="SC">Santa Catarina</option>
                  <option {{$hemocentro->state == "SP" ? "selected" : ""}} value="SP">São Paulo</option>
                  <option {{$hemocentro->state == "SE" ? "selected" : ""}} value="SE">Sergipe</option>
                  <option {{$hemocentro->state == "TO" ? "selected" : ""}} value="TO">Tocantins</option>
            </select>
            @if($errors->has('state'))
                <span class="text-input-error">
                    <strong>{{$errors->first('state')}}</strong>
                </span>
            @endif
          </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Telefone</label>
            <input type="text" class="form-control" name="phone" placeholder="Insira o telefone do hemocentro" value="{{$hemocentro->phone}}">
            @if($errors->has('phone'))
                <span class="text-input-error">
                    <strong>{{$errors->first('phone')}}</strong>
                </span>
            @endif
          </div>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Alterar</button>
      </div>
    </form>
  </div>  
</div>

    
</section>

<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{$hemocentro->id}}">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $hemocentro->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefone" class="col-md-4 col-form-label text-md-right">Telefone</label>

                            <div class="col-md-6">
                                <input id="telefone" type="telefone" class="form-control{{ $errors->has('telefone') ? ' is-invalid' : '' }}" name="email" value="{{ $hemocentro->telefone }}" required>

                                @if ($errors->has('telefone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('telefone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->
@endsection
