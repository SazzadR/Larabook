@extends('layouts.default')

@section('content')
    <div class="jumbotron">
        <h1>Welcome to Larabook!</h1>
        <p>Welcome to the premier place to talk about Laravel. Why don't you sighup to see what all the fuss is about?</p>
        @if(Auth::guest())
            <p>
                <a class="btn btn-lg btn-primary" href="{{ route('auth.register') }}" role="button">Sign Up! &raquo;</a>
            </p>
        @endif
    </div>
@stop