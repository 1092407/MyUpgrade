@extends('layouts.Public')

@section('title', 'Registration page')

@section('content')


<div class="container-fluid text-center my-5">
    <h2><b>Registrazione</b></h2>
    <p class="lead">Utilizza questa form per registrarti al sito</p>

    <div class="container text-center">

            {{ Form::open(array('route' => 'register', 'files' => true, 'class' => 'register-form')) }}

                <div class=" mb-3">
                    {{ Form::label('name', 'Nome', ['class' => 'form-label']) }}
                    {{ Form::text('name', '', ['class' => 'form-control', 'id' => 'name']) }}
                    @if ($errors->first('name'))
                    <ul class="errors">
                        @foreach ($errors->get('name') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

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

            <div class="mb-3">
                {{ Form::label('password-confirm', 'Conferma password', ['class' => 'label-input']) }}
                {{ Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password-confirm']) }}
            </div>

            <div class="mb-3">
                {{ Form::submit('Registra', ['class' => 'btn btn-light']) }}
            </div>

            <div class="mb-3">
                <p class="lead"> Se hai già un account effettua il  <a href="{{ route('login') }}">login</a></p>
            </div>


            {{ Form::close() }}

        </div>
    </div>


@endsection
