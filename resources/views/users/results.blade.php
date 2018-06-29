@extends('layouts.app')

@section('content')
<aside class="col-lg-offset-4 col-lg-4">
    <h1 class="text-center">{{ $user->team_name }}</h1>
     @if (count($members) > 0)
       @foreach ($members as $member)
        <div  class="col-xs-6" >
        <div class="panel panel-default">
            <div class="panel-body">
            <div class="text-center">   
        <h1>{{ $member->member_name }}</h1>
            </div>
            </div>
        </div>
        </div>
        @endforeach
    @endif
    <div class="text-center">
    <a href="{{ route('users.result') }}" class="btn btn-success btn-lg">もう一回！</a>
    </div>
    </aside> 
 @endsection