@extends('layouts.app')

@section('content')
    <aside class="col-xs-offset-4 col-xs-4" >
    <h1>{{ $user->team_name }}</h1>
     @if (count($members) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>team members</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $member)
                 <tr>
                     <td>{{ $member->member_name }}</td>
                     <td>
                     <div class='btn-group'>
                        {!! Form::open(['route' => ['members.destroy', $member->id], 'method' => 'delete']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('users.result') }}" class="btn btn-success btn-lg">せきがえ</a>
    @endif  
    </aside>
@endsection