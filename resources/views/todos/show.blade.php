@extends('Layouts.app')
@section('title')
    {{$todo->title}}
@endsection
@section('content')
    <a class="btn btn-default" href="/todo">Go Back</a>
    <div class="card p-2" id="showtodo">
        <div class="d-flex justify-content-between">
            <a href="/todo/{{$todo->id}}/edit" class="btn btn-primary">
                <span class="glyphicon glyphicon-pencil"></span> Edit
            </a>
            <a class="btn btn-success" href="/todo/create">
                <span class="glyphicon glyphicon-plus"></span> New
            </a>
            {!! Form::open(['action' => ['TodosController@destroy',$todo->id],'method'=>'POST','onsubmit' => 'return confirm("Are you sure you want to delete the Todo?")']) !!}
            {{ Form::hidden('_method','DELETE')}}
            {{ Form::bsButton('Delete',['type'=>'submit','class' =>'btn btn-danger','id'=>'btnDelete'])}}

            {!! Form::close() !!}
        </div>
        <h1> {{ucfirst($todo->title)}}</h1>
        <span>Created: ({{date('l d F Y H:i:s', strtotime($todo->created_at))}})</span>
        <hr>
        <p>
        <pre>{{$todo->body}}</pre>
        </p>
        <span class="lable label-success">Due: {{$todo->due}}</span>
    </div>
@endsection