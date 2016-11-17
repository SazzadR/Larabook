<article class="media status-media">
    <div class="pull-left">
        <img class="media-object" src="{{ Auth::user()->present()->gravatar(Auth::user()->email, 30) }}" alt="{{ Auth::user()->username }}">
    </div>

    <div class="media-boxy">
        <h4 class="media-heading">{{ $status->user->username }}</h4>
        <p>{{ $status->present()->timeSincePublished() }}</p>
        {{ $status->body }}
    </div>
</article>