<div class="hide-show-comments" @if( ! $status->comments()->count() ) style="display: none" @endif>
    <div class="clearfix">
        <span class="pull-right comments-indicator">comments</span>
    </div>

    <div class="comments">
        @foreach($status->comments as $comment)
            @include('status.ajax.comment-data')
        @endforeach
    </div>
</div>