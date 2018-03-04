@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>{{$todo->name}}</h3>
        </div>

        <div class="panel-body">
            ID: {{$todo->id}}<br>
            Description: {{$todo->description}}<br>
            Created At: {{$todo->created_at ?: 'N/A'}}<br>
            Updated At: {{$todo->updated_at ?: 'N/A'}}
        </div>
    </div>
@endsection
