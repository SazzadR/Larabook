@extends('layouts.default')

@section('content')
    <h1>Sign In!</h1>

    @include('layouts.partials.errors')

    {!! Form::open(['route' => 'auth.login']) !!}
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Login', ['class' => 'btn btn-primary']) !!}
            <a href="{{ route('auth.password.reset.showLinkRequest') }}" class="btn btn-link">
                Forget Your Password?
            </a>
        </div>
    {!! Form::close() !!}
@stop