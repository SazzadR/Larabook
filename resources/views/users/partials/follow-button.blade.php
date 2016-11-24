@unless($user->is(Auth::user()))
    @if( ! $currentUserFollows )
        @include('users.partials.follow-form')
    @else
        @include('users.partials.un-follow-form')
    @endif
@endunless