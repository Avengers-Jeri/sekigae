@extends('layouts.app')

@section('content')
        <aside class="col-xs-offset-4 col-xs-4">
    <h1>{{ $user->team_name }}</h1>
    {!! Form::open(['route' => 'members.store']) !!}
                      <div class="form-group">
                          {!! Form::text('member_name', old('member_name'), ['class' => 'form-control','placeholder'=>"name"]) !!}
                          {{ Form::submit('Belong to '.Auth::user()->team_name  , ['class' => 'btn btn-primary btn-block']) }}
                      </div>
                  {!! Form::close() !!}
    
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
    
    
     <p class='text-right'>{!! link_to_route('users.taikai', '退会したい？') !!}</p>
    </aside>



@endsection