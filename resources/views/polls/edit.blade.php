@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit answers to your poll</h1>
        <p>Without answers there would be no polling</p>
        <h4>Question: What is the meaning of univers</h4>
        <br>

        <table>
            <tr>
                <th>#</th>
                <th>text</th>
            </tr>
            <tr>
                    <td>1</td>
                    <td>Some previously typed answer</td>
                </tr>
                <tr>
                        <td>1</td>
                        <td>Some previously typed answer</td>
                    </tr>
        </table>
        <br>
        <br>    
        <h6>Add more answers</h6>
        <div class="poll__create">
        <form action="" method="POST">
            <label for="question">Answer: <input type="text" name="Answer" id="answer" ></label>
            <input type="submit" value="Ad">
        </form>
            
        </div>
    </div>
    
@endsection  