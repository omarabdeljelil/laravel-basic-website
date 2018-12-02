@extends('Layouts.todos')
@section('title')
    Edit Todo
@endsection
@section('content')
    <a class="btn btn-default" href="/todo/{{$todo->id}}">Go back</a>
    <h1>Edit Todo</h1>
    {!! Form::open(['action' => ['TodosController@update',$todo->id],'method'=>'POST']) !!}
    {{ Form::bsText('title',$todo->title)}}
    {{ Form::bsTextArea('body',$todo->body)}}
    {{ Form::bsText('due',$todo->due)}}
    {{ Form::hidden('_method','PUT')}}
    {{ Form::bsSubmit('Submit',['class' =>'btn btn-primary'])}}

    {!! Form::close() !!}
@endsection
