@if(isset($user->username))
    @include('layouts.partials.avatar')
@elseif(isset($status->user))
    @include('layouts.partials.avatar', ['user' => $status->user])
@else
    @include('layouts.partials.avatar', ['user' => Auth::user()])
@endif