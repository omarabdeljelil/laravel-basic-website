@extends('layouts.app')
@section('title')
    My Dashboard
@endsection
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard <span class="float-right"> <a href="/listings/create"
                                                                                 class="btn btn-success btn-sm">Add listing</a></span>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Your Listings</h3>
                    @if(count($listings))
                        <table class="table table-striped">
                            <tr>
                                <th style="width: 80%">Company</th>
                                <th style="width: 10%"></th>
                                <th style="width: 10%"></th>
                            </tr>
                            @foreach($listings as $listing)
                                <tr>
                                    <td>{{$listing->name}}</td>
                                    <td>
                                        <a class="float-right btn btn-primary" href="/listings/{{$listing->id}}/edit">Edit</a>
                                    </td>
                                    <td> {!! Form::open(['action' => ['ListingsController@destroy',$listing->id],'method'=>'POST', 'onsubmit' => 'return confirm("Are you sure you want to delete the listing?")']) !!}
                                        {{ Form::hidden('_method','DELETE')}}
                                        {{ Form::bsSubmit('Delete',['class' =>'btn btn-danger float-right'])}}
                                        {!! Form::close() !!}</td>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
