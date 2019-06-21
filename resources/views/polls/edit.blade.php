@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit answers to your poll</h1>
        <p>Without answers there would be no polling</p>
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
        <h6>Add more answers</h6>
        <div class="poll__create">
        <form action="" method="POST">
            @csrf
            <label for="question">Answer: <input type="text" name="Answer" id="answer" ></label>
            <input type="submit" value="Ad">
        </form>
            
        </div>
    </div>
    
@endsection  