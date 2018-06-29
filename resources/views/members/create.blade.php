@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-offset-4 col-xs-4">
            
            
            
                  {!! Form::open(['route' => 'members.store']) !!}
                      <div class="form-group">
                          {!! Form::text('member_name', old('member_name'), ['class' => 'form-control','placeholder'=>"name"]) !!}
                          {{ Form::submit('Add to '.Auth::user()->team_name  , ['class' => 'btn btn-primary btn-block']) }}
                      </div>
                  {!! Form::close() !!}
            
        </aside>
        
        
    </div>
@endsection