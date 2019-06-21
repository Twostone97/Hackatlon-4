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
                <td>
                    @if ($done)
                        <strong>{{ $option->votes }}</strong>
                    @else
                    <form action="" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$option->id}}">
                            <input type="hidden" name="poll_id" value="{{$poll->id}}">
                            <input type="hidden" name="votes" value="{{$option->votes}}">
                            <input type="hidden" name="is_owner" value="0">
                            <button type="submit">Vote</button>
                        </form>    
                    @endif
                </td>
            </tr>
            @endforeach
        </table>
        <br>
        <br>    
        
            
        </div>
    </div>
    
@endsection  