@extends('layouts.app')
@section('title')
    Messages list
@endsection
@section('content')
    @if(count($messages) > 0)
        <h1 class="text-info">Sent messages</h1>
        <table class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
            <th class="th-sm">id</th>
            <th class="th-sm">name</th>
            <th class="th-sm">email</th>
            <th class="th-sm">message</th>
            <th class="th-sm">sent at</th>
            </thead>
            <tbody>
            @foreach($messages as $message)
                <tr>
                    <td>{{$message->id}}</td>
                    <td>{{$message->name}}</td>
                    <td>{{$message->email}}</td>
                    <td>{{$message->message}}</td>
                    <td>{{date('d-m-Y H:i:s', strtotime($message->created_at))}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h1>No messege is sent</h1>
    @endif
@endsection

