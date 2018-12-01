@extends('Layouts.todos')
@section('title')
Todo list
@endsection
@section('content')

    @if(count($todos)>0)
        <h1>To Do List</h1>
        <table class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
            <th class="th-sm">id</th>
            <th class="th-sm">title</th>
            <th class="th-sm">content</th>
            <th class="th-sm">due</th>
            <th class="th-sm">created at</th>
            <th class="th-sm">Actions</th>
            </thead>
            <tbody>
            @foreach($todos as $todo)
                <tr>
                    <td>{{$todo->id}}</td>
                    <td>{{$todo->title}}</td>
                    <td>{{$todo->body}}</td>
                    <td>{{$todo->due}}</td>
                    <td>{{date('l d F Y H:i:s', strtotime($todo->created_at))}}</td>
                    <td>
                        <a href="#" class="btn btn-info" title="edit">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        <a href="#" class="btn btn-danger" title="remove">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @else
        <h1>There is no todo list</h1>
    @endif
@endsection