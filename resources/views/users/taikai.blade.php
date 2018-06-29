@extends('layouts.app')

@section('content')

        <aside class="text-center">
            <br>
            {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                {!! Form::submit('本当に退会するのかね？', ['class' => 'btn btn-danger btn-lg']) !!}
            {!! Form::close() !!}
            <br>
        <a href="{{ route('users.show', $user->id) }}" class="yamenai">やっぱり続ける</a>

    </aside>
    



@endsection