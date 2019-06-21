@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Your polls</h1>
        <br>
    <h4>Dear {{Auth::user()->name}},</h4>
    <p>This is list of all polls created by you...</p>
        <div class="poll__detail">
            @foreach ($pollinfo as $poll)
            <div><p><span class="poll__detail__question">Question text:</span><br><span class="poll__detail__question__text"><a href="/poll/{{$poll->id}}/edit">{{$poll->Question}}</a><span></p></div>
            
            <div style="flex: 0 0 50%">
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
            </div>
            @endforeach
        </div>
    </div>
    
@endsection  