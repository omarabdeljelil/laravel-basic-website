@extends('layouts.app')
@section('title')
    Latest business listings
@endsection
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Latest business listings <a class="btn btn-primary btn-sm float-right" href="/dashboard">My listings</a></div>
                <div class="card-body">
                    @if(count($listings))
                        <ul class="list-group">
                            @foreach($listings as $listing)
<li class="list-group-item"><a href="/listings/{{$listing->id}}">User {{$listing->user_id}}: {{$listing->name}}</a></li>
                            @endforeach
                        </ul>
                    @else
                        <p>No listings found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
