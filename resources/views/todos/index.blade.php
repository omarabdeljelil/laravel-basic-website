@extends('Layouts.app')
@section('title')
    Todo list
@endsection
@section('content')

    <h1>Todos <span><a class="btn btn-success" href="/todo/create">New</a></span></h1>
    @if(count($todos)> 0)
        <div class="d-flex">
            @foreach($todos as $todo)
                <div class="card p-2 m-3">
                    <h3><a href="todo/{{$todo->id}}">{{$todo->title}}</a></h3>
                    <span class="lable label-success text-center">{{$todo->due}}</span>
                </div>
            @endforeach
        </div>
    @endif
@endsection