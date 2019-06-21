@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Your polls</h1>
        <p>This is list of all created by you...</p>
        <div class="poll__detail">
            <h6>#1</h6>
            @foreach ($pollinfo as $poll)
            <p><strong>Question text: </strong><a href="/poll/{{$poll->id}}/edit">{{$poll->Question}}</a></p>
            
            <table>
                <tr>
                    <th>Text</th>
                    <th>Votes</th>
                </tr>
                @foreach ($collection as $options)
                @foreach ($options as $option)
                @if($option->poll_id == $poll->id)
                <tr>
                    <td>{{$option->Answer}}</td>
                    <td>{{$option->votes}}</td>
                </tr>
                @endif
                @endforeach
                @endforeach
            </table>
            @endforeach
        </div>
    </div>
    
@endsection  