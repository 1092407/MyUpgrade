@extends('layouts.Public')
@section('title', 'Change Pass Page')
@section('content')

<div class="container-fluid text-center my-5" >
    <h2 style="margin-top:10%"><b>Change your password</b></h2>
    <p class="lead">Utilizza questa form per cambiare la tua password</p>


    @if (session('status'))
      <div class="alert alert-dark " role="alert">
        {{ session('status') }}
      </div>
      @endif

    <div class="container text-center">

            {{ Form::open(array('route' => 'ChangePass', 'files' => true, 'class' => 'register-form')) }}

            <div class="mb-3">
                {{ Form::label('old_password', 'Old password', ['class' => 'label-input']) }}
                {{ Form::password('old_password', ['class' => 'form-control', 'id' => 'old_password']) }}
                @if ($errors->first('old_password'))
                <ul class="errors">
                    @foreach ($errors->get('old_password') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>


            <div class="mb-3">
                {{ Form::label('password', 'New password', ['class' => 'label-input']) }}
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
                {{ Form::label('password_confirmation', 'Confirm new password', ['class' => 'label-input']) }}
                {{ Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password_confirmation']) }}
            </div>

            <div class="mb-3">
                {{ Form::submit('Change password', ['class' => 'btn btn-outline-success']) }}
            </div>


            {{ Form::close() }}

        </div>
    </div>


@endsection

