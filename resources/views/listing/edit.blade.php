@extends('layouts.app')
@section('title')
    Edit listing
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Listing <a class="btn btn-primary btn-sm float-right" href="/dashboard">Go back</a></div>

                <div class="card-body">
                    {!! Form::open(
                    ['action' => ['ListingsController@update',$listing->id],
                    'method'=>'POST']) !!}
                        {{ Form::bsText('name', $listing->name)}}
                        {{ Form::bsText('website',$listing->website)}}
                        {{ Form::bsText('email', $listing->email)}}
                        {{ Form::bsText('phone', $listing->phone)}}
                        {{ Form::bsText('address', $listing->address)}}
                        {{ Form::bsTextArea('bio', $listing->bio)}}
                        {{ Form::hidden('_method','PUT')}}
                        {{ Form::bsSubmit('Submit',['class' =>'btn btn-primary'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection