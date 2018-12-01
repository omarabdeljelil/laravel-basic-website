@extends('layouts.main')

@section('content')
    <h1>Contact</h1>

    {!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
        {{Form::label('name', 'Full name')}}
        {{Form::text('name', '',['placeholder'=>'First and Last name', 'class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('email', 'E-Mail')}}
        {{Form::text('email', '',['placeholder'=>'example@gmail.com', 'class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('message', 'Message')}}
        {{Form::textarea('message', '',['placeholder'=>'Your message or comments', 'class'=>'form-control'])}}
    </div>
    <div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    </div>

    {!! Form::close() !!}
@endsection