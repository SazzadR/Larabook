{!! Form::open(['route' => ['user.unfollow', $user->id]]) !!}
	{!! Form::submit('Unfollow', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}