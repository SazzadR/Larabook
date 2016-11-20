<article class="media status-media">
    <div class="pull-left">
        @include('layouts.partials.avatar', ['user' => Auth::user()])
    </div>

    <div class="media-boxy">
        <h4 class="media-heading">{{ $status->user->username }}</h4>
        <p>{{ $status->present()->timeSincePublished() }}</p>
        {{ $status->body }}
    </div>
</article>