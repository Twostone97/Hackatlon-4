@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Polls list</h1>
        <p>This is list of all created by our users...</p>
        @foreach ($polls as $poll)
        
        <div class="poll__detail">
            <div>
                <p><span class="poll__detail__question">Question text: </span><br>
            <span class="poll__detail__question__text">{{$poll->Question}}</span></p>
            </div>
        <div><a href="/poll/{{$poll->id}}/view"><button class="btn btn-primary">Go to poll</button></a></div>
        </div>
        @endforeach
    </div>
    
    
@endsection  