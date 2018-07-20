@if (Auth::user()->is_favoriting($groups->id))
        {!! Form::open(['route' => ['groups.unfavorite', $groups->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btnn2 btn-danger btn-xs"]) !!}
        {!! Form::close() !!}
   @else
        {!! Form::open(['route' => ['groups.favorite', $groups->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btnn2 btn-primary btn-xs"]) !!}
        {!! Form::close() !!}
   @endif