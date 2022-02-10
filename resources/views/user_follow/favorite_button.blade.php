@if (Auth::user()->is_favorite($user->id))
    {{-- アンフォローボタンのフォーム --}}
    {!! Form::open(['route' => ['user.unfavorite', $user->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-block"]) !!}
    {!! Form::close() !!}
@else
    {{-- フォローボタンのフォーム --}}
    {!! Form::open(['route' => ['user.favorite', $user->id]]) !!}
        {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-block"]) !!}
    {!! Form::close() !!}
@endif
