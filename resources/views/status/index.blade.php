@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            @include('layouts.partials.errors')

            @include('status.partials.publish-status-form')

            @foreach($statuses as $status)
                @include('status.partials.statuses')
            @endforeach
        </div>
    </div>
@stop