@if(isset($user->username))
    @include('layouts.partials.avatar', ['class' => 'status-media-object'])
@elseif(isset($status->user))
    @include('layouts.partials.avatar', ['user' => $status->user, 'class' => 'status-media-object'])
@else
    @include('layouts.partials.avatar', ['user' => Auth::user(), 'class' => 'status-media-object'])
@endif