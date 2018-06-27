@extends('layouts.app')

@section('content')

                    <h1>{{ $user->team_name }}</h1>
     @if (count($members) > 0)
       @foreach ($members as $member)
        <div  class="col-xs-6 col-sm-6 col-md-6 col-lg-6" >
        <div class="panel panel-default">
            <div class="panel-body">
        <p>{{ $member->member_name }}</p>
            </div>
        </div>
        </div>
        @endforeach
    @endif  

@endsection