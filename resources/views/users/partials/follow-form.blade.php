{!! Form::open(['route' => ['user.follow', $user->id]]) !!}
	{!! Form::submit('Follow', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}