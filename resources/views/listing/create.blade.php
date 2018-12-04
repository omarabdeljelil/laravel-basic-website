@extends('layouts.app')
@section('title')
    Create listing
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Listing <a class="btn btn-primary btn-sm float-right" href="/dashboard">Go back</a></div>

                <div class="card-body">
                    {!! Form::open(['action' => 'ListingsController@store','method'=>'POST']) !!}
                    {{ Form::bsText('name', '',['placeholder'=>'Company Name'])}}
                    {{ Form::bsText('website', '',['placeholder'=>'Company website'])}}
                    {{ Form::bsText('email', '',['placeholder'=>'Contact Email'])}}
                    {{ Form::bsText('phone', '',['placeholder'=>'555 888 999'])}}
                    {{ Form::bsText('address', '',['placeholder'=>'Business Address'])}}
                    {{ Form::bsTextArea('bio', '',['placeholder'=>'About this Business'])}}
                    {{ Form::bsSubmit('Submit',['class' =>'btn btn-primary'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection