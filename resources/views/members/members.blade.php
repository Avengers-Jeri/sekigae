@extends('layouts.app')

@section('content')

    <h1>Team Members</h1>

     @if (count($members) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $member)
                    <tr>
                        <td>{!! link_to_route('/', $member->id, ['id' => $member->id]) !!}</td>
                        <td>{{ $member->member_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif  
    
@endsection
