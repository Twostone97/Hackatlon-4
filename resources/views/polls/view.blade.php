@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Polls overview</h1>
        <p>This is list of all created by our users...</p>
        <div class="poll__detail">
            <h6>#1</h6>
            <p><strong>Question text: </strong>What is the meaning of life?</p>
            <table>
                <tr>
                    <th>Option</th>
                    <th>Text</th>
                    <th></th>
                </tr>
                <tr>
                    <td>#1</td>
                    <td>It is 42</td>
                    <td><button>Vote</button></td>
                </tr>
                <tr>
                        <td>#1</td>
                        <td>Happiness and eternal satisfaction</td>
                        <td><button>Vote</button></td>
                    </tr>
            </table>
            
        </div>
    </div>
    
@endsection  