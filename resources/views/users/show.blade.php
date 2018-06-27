@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
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
@endsection