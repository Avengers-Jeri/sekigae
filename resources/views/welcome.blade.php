@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->team_name }}
    @else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>せきがえしよ</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('team_name', 'Team Name') !!}
                    {!! Form::text('team_name', old('team_name'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Log in', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}

            <p>初めての方は {!! link_to_route('signup.get', 'こちら！') !!}</p>
        </div>
    </div>
    @endif
    
@endsection