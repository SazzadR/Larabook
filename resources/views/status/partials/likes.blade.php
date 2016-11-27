<div class="pull-left">
    {!! Form::open(['route' => 'status.like']) !!}
    {!! Form::hidden('status_id', $status->id) !!}
    {!! Form::button('<span class="glyphicon glyphicon-thumbs-up"></span> Like', ['class' => 'btn btn-default btn-sm like-btn']) !!}
    {!! Form::close() !!}
</div>

<div class="like-counter">{{ $status->present()->likesCount() }}</div>