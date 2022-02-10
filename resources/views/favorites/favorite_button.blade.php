@if (Auth::user()->is_favorite($user->id))
    {{-- アンfavoriteボタンのフォーム --}}
    {!! Form::open(['route' => ['user.unfavorite', $user->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-sm"]) !!}
    {!! Form::close() !!}
@else
    {{-- フォローボタンのフォーム --}}
    {!! Form::open(['route' => ['user.favorite', $user->id]]) !!}
        {!! Form::submit('Favorite', ['class' => "btn btn-success btn-sm"]) !!}
    {!! Form::close() !!}
@endif
