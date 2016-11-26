@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h1>Need to reset your password?</h1>

            @include('layouts.partials.errors')

            {!! Form::open(['route' => 'auth.password.reset.sendResetEmail']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'Email:') !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Reset Password', ['class' => 'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop