@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>See answers </h1>
        <h4>Question: {{ $poll->Question }}</h4>
        <br>

        <table>
            <tr>
                <th>Options</th><br>
            </tr>
            @foreach ($options as $option)
            <tr>
                <td>{{$option->Answer}}</td>
                <form action="" method="post">
                    <input type="hidden" name="poll_id" value="{{$poll->id}}">
                    <input type="hidden" name="votes" value="{{$option->votes}}">
                    <input type="hidden" name="is_owner" value="0">
                    <button type="submit">Vote</button>
                </form>
            </tr>
            @endforeach
        </table>
        <br>
        <br>    
        
            
        </div>
    </div>
    
@endsection  