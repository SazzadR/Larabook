<article class="media status-media">
    <div class="pull-left">
        @if(isset($user->username))
            @include('layouts.partials.avatar')
        @elseif(isset($status->user))
            @include('layouts.partials.avatar', ['user' => $status->user])
        @else
            @include('layouts.partials.avatar', ['user' => Auth::user()])
        @endif
    </div>

    <div class="media-boxy">
        <h4 class="media-heading">{{ $status->user->username }}</h4>
        <p>{{ $status->present()->timeSincePublished() }}</p>
        {{ $status->body }}
    </div>
</article>