@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="media">
                <div class="pull-left">
                    @include('layouts.partials.avatar', ['size' => 50])
                </div>

                <div class="media-body">
                    <h1 class="media-heading">{{ $user->username }}</h1>
                    <ul class="list-inline text-muted">
                        <li>{{ $user->present()->statusCount() }}</li>
                        <li>{{ $user->present()->followerCount() }}</li>
                    </ul>

                    @include('users.partials.follow-button')
                </div>

                @foreach($user->followers as $follower)
                    <div style="padding-top: 1em; display: inline-block">
                        @include('status.partials.avatar-with-profile-link', ['user' => $follower, 'size' => 25])
                    </div>
                @endforeach
            </div>
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

@section('page_specific_js')
    <script type="text/javascript" src="{{ asset('js/submit-form-with-enter.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/like-status.js') }}"></script>
@stop