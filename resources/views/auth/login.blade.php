@extends('layouts.Public')

@section('title', 'Login page')

@section('content')


<div class="container-fluid text-center my-5" style="margin-top:20px;">
    <h2><b>Login</b></h2>
    <p class="lead">Accedi alla tua area riservata</p>

    <div class="container text-center">

            {{ Form::open(array('route' => 'login', 'files' => true, 'class' => 'login-form')) }}



                <div class="mb-3">
                    {{ Form::label('email', 'Email', ['class' => 'form-label']) }}
                    {{ Form::text('email', '', ['class' => 'form-control','id' => 'email']) }}
                    @if ($errors->first('email'))
                    <ul class="errors">
                        @foreach ($errors->get('email') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>



            <div class="mb-3">
                {{ Form::label('password', 'Password', ['class' => 'label-input']) }}
                {{ Form::password('password', ['class' => 'form-control', 'id' => 'password']) }}
                @if ($errors->first('password'))
                <ul class="errors">
                    @foreach ($errors->get('password') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>




                                    <div class="form-group mb-3">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                       <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                      </label>
                                </div>



            <div class="mb-3">
                {{ Form::submit('Login', ['class' => 'btn btn-light']) }}
            </div>



             @if (Route::has('password.request'))
                   <a class="btn btn-link" href="{{ route('password.request') }}">
                   {{ __('Forgot Your Password?') }}
                   </a>
              @endif


            {{ Form::close() }}

        </div>
    </div>


@endsection
