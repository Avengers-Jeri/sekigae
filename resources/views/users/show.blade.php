@extends('layouts.app')

@section('content')
        <aside class="col-xs-4">
<<<<<<< HEAD
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3><class="panel-title">{{ $user->team_name }}</h3>
                </div>
                @if (count($members) > 0)
                @include('members.members', ['members' => $members])
                @endif
            </div>
        </aside>
    </div>
=======
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
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif  
    </aside>
    
    
>>>>>>> 7c946cb9c61c2503ef345893b5b21bcc57e303d4
@endsection