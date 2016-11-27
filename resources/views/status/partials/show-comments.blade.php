@if($status->comments()->count())
    <div class="clearfix">
        <span class="pull-right comments-indicator">comments</span>
    </div>

    <div class="comments">
        @foreach($status->comments as $comment)
            <article class="comments__comment media status-media">
                <div class="pull-left">
                    @include ('status.partials.avatar-with-profile-link', ['user' => $comment->user, 'class' => 'media-object'])
                </div>

                <p class="pull-right"><small class="status-media-time status-media-time-comment">{{ $comment->present()->timeSincePublished() }}</small></p>
                <div class="media-body">
                    <h4 class="media-heading">{{ $comment->user->username }}</h4>

                    {{ $comment->body }}
                </div>
            </article>
        @endforeach
    </div>
@endif