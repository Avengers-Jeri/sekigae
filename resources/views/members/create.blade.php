@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            
                  {!! Form::open(['route' => 'members.store']) !!}
                      <div class="form-group">
                          {!! Form::textarea('member_name', old('member_name'), ['class' => 'form-control', 'rows' => '2']) !!}
                          {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                      </div>
                  {!! Form::close() !!}
            
        </aside>
    </div>
@endsection