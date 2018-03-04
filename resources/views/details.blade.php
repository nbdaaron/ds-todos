@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>{{$todo->name}}</h3>
        </div>

        <div class="panel-body">
            {{$todo->description}}
        </div>
    </div>
@endsection
