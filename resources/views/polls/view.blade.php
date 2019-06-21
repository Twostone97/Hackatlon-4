@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Polls overview</h1>
        <p>This is list of all created by our users...</p>
        @foreach ($polls as $poll)
        {{--  
        for ($i=0;$i<count($user_polls);$i++) {
            if($user_polls[$i]->poll_id === $poll->id) {
                $answered=true;
                break;
            }
        }
         --}}
        
        <div class="poll__detail">
            <h6>#1</h6>
            <p><strong>Question text: </strong>{{$poll->Question}}</p>
        <a href="/poll/{{$poll->id}}/view"><button>Go to poll</button></a>
        </div>
    </div>
    @endforeach
    
@endsection  