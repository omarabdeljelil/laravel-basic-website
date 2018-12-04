@extends('layouts.app')
@section('title')
    {{$listing->name}}
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$listing->name}} <a class="btn btn-primary btn-sm float-right"
                                                               href="/listings">Go back</a></div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Address: {{$listing->address}}</li>
                        <li class="list-group-item">Website: <a href="{{$listing->website}}"
                                                                target="_blank">{{$listing->website}}</a></li>
                        <li class="list-group-item">email: {{$listing->email}}</li>
                        <li class="list-group-item">Phone: {{$listing->phone}}</li>
                    </ul>
                    <hr>
                    <div class="card">
                        {{$listing->bio}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection