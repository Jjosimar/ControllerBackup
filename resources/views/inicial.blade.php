<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/now-ui-kit.css?v=1.1.0') }}"/>



</head>

<body class="index-page sidebar-collapse">
    <!-- Navbar -->
    <div class=" section-top" id="#top-section">
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
              <a class="nav-link" href="javascript:void(0)" onclick="scrollToTop()">
                  <img src="img/logotipo_donar.png" class="invision-logo" />

                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
                            <i class="now-ui-icons travel_info"></i>
                            <p>Saiba mais sobre o Donar</p>
                        </a>
                    </li>
                    <li class="nav-item">
                          <a class="nav-link" href="javascript:void(0)" onclick="scrollToSign()">
                            <i class="now-ui-icons users_circle-08"></i>
                            <p>Fazer login</p>
                        </a>
                    </li>
                    <li class="nav-item">
                          <a class="nav-link" href="javascript:void(0)" onclick="scrollToSignup()">
                            <i class="now-ui-icons business_badge"></i>
                            <p>Cadastre seu hemocentro</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="page-header clear-filter" filter-color="orange">
            <div class="page-header-image" data-parallax="true" style="background-image: url('img/header.jpg');">
            </div>
            <div class="container">
                <div class="content-center brand">
                    <img class="n-logo" src="img/now-logo.png" alt="">
                    <h3>Conexões que salvam vidas</h3>
                </div>

            </div>
        </div>
</section>
             <div class="section section-tabs" id="section-about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-lg-8 col-xl-4 ml-auto mr-auto">
                            <p class="category">Sobre o Donar</p>
                            <div class="card">
                                <div class="card-body">
                                    <!-- Tab panes -->
                                    <div class="tab-content text-justify">
                                        Segundo a OMS(2015), um país com um indice favoravel de doação de sangue tem que estar entre 3% a 5%. 
										O Brasil, mesmo sendo considerado o maior dodador da America Latina, doa apenas 1,8% e muitas pessoas desconhece a importancia e o beneficio de tal ação
                                        com isso criamos o Donar, um aplicativo que visa aumentar o indice de doação de Sangue.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 col-lg-8 col-xl-4 ml-auto mr-auto">
                            <p class="category">Curiosidades</p>
                            <div class="card">
                                <div class="card-body">
                                    <div class="tab-content text-justify">
                                        Existe muitas curiosidades acerca do procedimento da doãção de sangue que as pessoas desconhecem como a agulha que sugar o sangue é mais grossa que
                                        as comuns usada para tirar o sangue, o doaodr no dia que for doar o sangue tem direito a um dia de folga, podem ter benenficios em 
                                        alguns estabelecimentos culturais caso tenha carteirinha comprovando que é um doador de sangue frequente e entre outros.
                                    </div>
                                </div>
                            </div>
                            <!-- End Tabs on plain Card -->
                        </div>
                        <div class="col-md-10 col-lg-8 col-xl-4 ml-auto mr-auto">
                            <p class="category">Por que doar sangue?</p>
                            <!-- Tabs with Background on Card -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="tab-content text-justify">
                                        Além dos beneficios citados nas curiosidades, uma doação de sague, de acordo com o Ministério da Sáude (2016), uma doação de sague pode salvar de 1 ate 4 vidas dependendo do tratamento e da necessidade, e no Brasil infelizmente, as pessas apenas costumam doar sangue quando algum familiar ou pessoas proxíma, diferente dos paises mais desenvolvidos onde é o habito de doar sangue é uma ação normal.
                                    </div>
                                </div>
                            </div>
                            <!-- End Tabs on plain Card -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Section Tabs -->
            <!-- Início do login de usuário -->
            <div class="section section-sign" id="#sign-section" style="background-image: url('img/bg11.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
                <div class="container">
                    <div class="row">
                        <div class="card card-signup" data-background-color="orange">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="header text-center">
                                    <h4 class="title title-up">Login</h4>
                                    <div class="social-line">
                                        <a href="#pablo" class="btn btn-neutral btn-google btn-icon btn-lg btn-round">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons ui-1_email-85"></i>
                                        </span>
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                        </span>
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-7 offset-md-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember-Me
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- If you want to add a checkbox to this form, uncomment this code -->
                                    <!-- <div class="checkbox">
	  								<input id="checkboxSignup" type="checkbox">
	  									<label for="checkboxSignup">
	  									Unchecked
	  									</label>
	  						  		</div> -->
                                </div>
                                <div class="footer text-center">
                                <button type="submit" class="btn btn-neutral btn-round btn-lg">
                                   Entrar
                                </button>
                                
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Final do login de usuário -->
            <!-- Início cadastro do hemocentro -->
            
         
            <div class="section section-signup" id="#signup-section"style="background-image: url('img/bg11.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
                <div class="container">
                    <div class="row">
                        <div class="card" data-background-color="orange">
                                <div class="header text-center">
                                    <h4 class="title title-up">Cadastro do hemocentro</h4>
                                    <div class="social-line">
                                        <a href="#pablo" class="btn btn-neutral btn-google btn-icon btn-lg btn-round">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        
                                        Dados do Responsável
                                        <div class="input-group form-group-no-border">
                                            <span class="input-group-addon">
                                                    <!-- Icone-->
                                            </span>                                            
                                            <input  type="text" placeholder="Nome" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                       
                                        </div>

                                        <div class="input-group form-group-no-border">
                                            <span class="input-group-addon">
                                                <i class="now-ui-icons ui-1_email-85"></i>
                                            </span> 
                                                <input type="email" placeholder="{{ __('Email')}}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            
                                        </div>
                                        <div class="input-group form-group-no-border">
                                            <span class="input-group-addon">
                                                <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                            </span> 
                                                <input id="password_hemocentro" type="password" placeholder="{{ __('Senha')}}" class="form-control{{ $errors->has('password_hemocentro') ? ' is-invalid' : '' }}" name="password_hemocentro">

                                                @if ($errors->has('password_hemocentro'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('password_hemocentro') }}</strong>
                                                    </span>
                                                @endif
                                            
                                        </div>

                                        <div class="input-group form-group-no-border">
                                            <span class="input-group-addon">
                                                <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                            </span> 
                                                <input id="password-confirm" type="password" placeholder="{{ __('Confirmar Senha')}}" class="form-control" name="password_hemocentro_confirmation">
                                            
                                        </div>  
                                        
                                        <br/>
                                              Dados do Hemocentro                                   
                                        <div class="input-group form-group-no-border">
                                            <span class="input-group-addon">
                                       
                                            </span>
                                            <input type="text" id="name" class="form-control" placeholder="{{ __('Nome Hemocentro') }}"  name="name_hemocentro" required>
                                        </div>
                                        
                                        <div class="input-group form-group-no-border">
                                            <span class="input-group-addon">
                                           
                                            </span>
                                            <input type="text"  id= "telefone" class="form-control" placeholder="Telefone"  name="phone" required>
                                        </div>
                                        <div class="input-group form-group-no-border">
                                            <span class="input-group-addon">
                                            <!-- Icone-->
                                            </span>
                                            <input type="text" id ="endereco" class="form-control" placeholder="Endereço" name="address" required>
                                        </div>

                                          <div class="input-group form-group-no-border">
                                            <span class="input-group-addon">
                                                <i class="now-ui-icons ui-1_email-85"></i>
                                            </span> 
                                                <input type="email" placeholder="Email do Hemocentro" class="form-control{{ $errors->has('email_hemocentro') ? ' is-invalid' : '' }}" name="email_hemocentro" value="{{ old('email_hemocentro') }}" required>

                                                @if ($errors->has('email_hemocentro'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('email_hemocentro') }}</strong>
                                                    </span>
                                                @endif
                                            
                                            </div>

                                        <div class="input-group form-group-no-border">
                                            <span class="input-group-addon">
                                            <!-- Icone-->
                                            </span>
                                            <select name="state" class="form-control" placeholder="Estado" required>
                                                <option value="AC">Acre</option>
                                                <option value="AL">Alagoas</option>
                                                <option value="AP">Amapá</option>
                                                <option value="AM">Amazonas</option>
                                                <option value="BA">Bahia</option>
                                                <option value="CE">Ceará</option>
                                                <option value="DF">Distrito Federal</option>
                                                <option value="ES">Espírito Santo</option>
                                                <option value="GO">Goiás</option>
                                                <option value="MA">Maranhão</option>
                                                <option value="MT">Mato Grosso</option>
                                                <option value="MS">Mato Grosso do Sul</option>
                                                <option value="MG">Minas Gerais</option>
                                                <option value="PA">Pará</option>
                                                <option value="PB">Paraíba</option>
                                                <option value="PR">Paraná</option>
                                                <option value="PE">Pernambuco</option>
                                                <option value="PI">Piauí</option>
                                                <option value="RJ">Rio de Janeiro</option>
                                                <option value="RN">Rio Grande do Norte</option>
                                                <option value="RS">Rio Grande do Sul</option>
                                                <option value="RO">Rondônia</option>
                                                <option value="RR">Roraima</option>
                                                <option value="SC">Santa Catarina</option>
                                                <option value="SP">São Paulo</option>
                                                <option value="SE">Sergipe</option>
                                                <option value="TO">Tocantins</option>
                                            </select>
                                        </div>
                                        <div class="input-group form-group-no-border">
                                            <span class="input-group-addon">
                                            <!-- Icone-->
                                            </span>
                                            <input type="text" class="form-control" placeholder="Cidade" name="city" required>
                                        </div>
                                        <!--
                                        <div class="input-group form-group-no-border">
                                            <span class="input-group-addon">
                                            <!-- Icone>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Nome Responsável" name="user" required>
                                        </div>-->
                                        <div class="footer text-center">
                                            <button type="submit" class="btn btn-neutral btn-round btn-lg">
                                            Cadastrar
                                            </button>
                                        </div> 
                                        <!-- If you want to add a checkbox to this form, uncomment this code -->
                                        <!-- <div class="checkbox">
                                        <input id="checkboxSignup" type="checkbox">
                                            <label for="checkboxSignup">
                                            Unchecked
                                        </div>--> 
                                    </form>
                                </div>
                        </div>
                    </div>
                </div> 
            </div>    
                                                                                
        <!-- Sart Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                        </button>
                        <h4 class="title title-up">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default">Nice Button</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--  End Modal -->
        <!-- Mini Modal -->
        <div class="modal fade modal-mini modal-primary" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">fg
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <div class="modal-profile">
                            <i class="now-ui-icons users_circle-08"></i>
                        </div>
                    </div>
                    <div class="modal-body">
                        <p>Always have an access to your profile</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link btn-neutral">Back</button>
                        <button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--  End Modal -->
        <footer class="footer" data-background-color="black">
            <div class="container">
                <nav> 
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Equipe Donar
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md">
                                Unievangelica
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed by
                    <a href="http://www.invisionapp.com" target="_blank">EquipeSIXTI</a>. Coded by
                    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                </div>
            </div>
        </footer>
    </div>
</body>

<!-- jQuery 3 -->
<script src="{{asset('js/jquery.3.2.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootstrap-switch.js')}}"></script>
<script src="{{asset('js/nouislider.min.js')}}"></script>
<script src="{{asset('js/now-ui-kit.js?v=1.1.0')}}"></script>

<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script type="text/javascript">
$(document).ready(function() {
        // the body of this function is in assets/js/now-ui-kit.js
       // nowuiKit.initSliders();
    });

    function scrollToDownload() {

        if ($("#section-about").length != 0) {
            $("html, body").animate({
                scrollTop: $("#section-about").offset().top
            }, 1000);
        }
    }

    function scrollToSign() {

        if ($('.section-sign').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-sign').offset().top
            }, 1000);
        }
    }

    function scrollToSignup() {

        if ($('.section-signup').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-signup').offset().top
            }, 1000);
        }
    }

    function scrollToTop() {

        if ($('.section-top').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-top').offset().top
            }, 1000);
        }
    }
</script>

</html>
