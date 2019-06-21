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
            </tr>
            @endforeach
        </table>
        <br>
        <br>    
        
            
        </div>
    </div>
    
@endsection  