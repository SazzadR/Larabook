@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            @include('layouts.partials.errors')

            @include('status.partials.publish-status-form')

            <div id="statuses">
                @include('status.ajax.status-data')
            </div>

            @include('layouts.partials.load-statuses-animation')
        </div>
    </div>
@stop

@section('page_specific_js')
    <script type="text/javascript" src="{{ asset('js/submit-form-with-enter.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/like-status.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/statuses-scrolling-pagination.js') }}"></script>
@stop