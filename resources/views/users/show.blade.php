@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-3">
            <h1>{{ $user->username }}</h1>
            @include('layouts.partials.avatar', ['size' => 100])
        </div>

        <div class="col-md-6">
            @if($user->is(Auth::user()))
                @include('layouts.partials.errors')

                @include('status.partials.publish-status-form')
            @endif

            @foreach($user->statuses as $status)
                @include('status.partials.statuses')
            @endforeach
        </div>
    </div>
@stop