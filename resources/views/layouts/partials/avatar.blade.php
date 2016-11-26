<a href="{{ route('user.profile', $user->username) }}" data-toggle="tooltip" title="{{ $user->username }}">
    <img class="media-object" src="{{ $user->present()->gravatar(Auth::user()->email, isset($size) ? $size : 30) }}" alt="{{ $user->username }}">
</a>