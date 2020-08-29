@extends('layouts.login')

@section('content')

<div class="sidenav">
         <div class="login-main-text">
            <h2>Aplicación<br> Pagina Principal</h2>
            <p>Ingrese sus datos para acceder.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
                {!! Form::open(['route'=>'login','method'=>'POST']) !!}
                    {{ csrf_field() }}
                    <div class="form-group has-icon">
                        <i class="icon-envelope-o"></i>
                        {!! Form::email('email', null, ['class'=>'form-control form-control-lg', 'placeholder'=>'Email Address', 'require']) !!}
                        @error('email')
                        <span class="help-block text-danger">
                            {{ $message }}
                        </span>
                        @enderror 
                    </div>
                    <div class="form-group has-icon"><i class="icon-user-secret"></i>
                        {!! Form::password('password', ['class'=>'form-control form-control-lg', 'placeholder'=>'password', 'require']) !!}
                        @error('password')
                        <span class="help-block text-danger">
                            {{ $message }}
                        </span>
                        @enderror 
                    </div>
                    <a href="#" onclick="mostrarForm('passwordReset')">
                        <p class="forget-pass">¿ Have you forgot your password ?</p>
                    </a>
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Log In">
                {!! Form::close() !!}
            </div>
         </div>
</div>
<script>
  function mostrarForm(key){ 
      switch (key) {
        case 'passwordReset':
            $(".login-form").hide();
            $(".form-passwordReset").show('fast');
        break;
        case 'register':
            $(".login-form").hide();
            $(".form-passwordReset").hide();
            $(".form-register").show('fast');
        break;
        case 'login':
            $(".form-passwordReset").hide();
            $(".form-register").hide();
            $(".login-form").show('fast');
        break;
      }
  }
</script>
@endsection