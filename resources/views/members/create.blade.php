@extends('layouts.app')

@section('content')
    <aside class="col-lg-offset-4 col-lg-4">
    <div class="row">
            
                  {!! Form::open(['route' => 'members.store']) !!}
                      <div class="form-group">
                          {!! Form::text('member_name', old('member_name'), ['class' => 'form-control','placeholder'=>"name"]) !!}
                          {{ Form::submit('Add to '.Auth::user()->team_name  , ['class' => 'btn btn-primary btn-block']) }}
                      </div>
                  {!! Form::close() !!}
    </div>
    </aside> 
@endsection