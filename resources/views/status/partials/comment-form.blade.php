@if(isset($currentUserFollows))
    @if( $currentUserFollows and Auth::check() )
        {!! Form::open(['route' => ['status.comment', $status->id], 'class' => 'comments__create-form']) !!}
        <div class="form-group">
            {!! Form::textarea('body', null, ['placeholder' => 'Leave your comment', 'class' => 'form-control', 'rows' => 1]) !!}
        </div>
        {!! Form::close() !!}
    @endif
@else
    {!! Form::open(['route' => ['status.comment', $status->id], 'class' => 'comments__create-form']) !!}
    <div class="form-group">
        {!! Form::textarea('body', null, ['placeholder' => 'Leave your comment', 'class' => 'form-control', 'rows' => 1]) !!}
    </div>
    {!! Form::close() !!}
@endif