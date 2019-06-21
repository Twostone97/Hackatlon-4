@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create new poll</h1>
        <p>Be the master of the entire polling universe.</p>
        <div class="poll__create">
        <form action="" method="POST">
            <label for="question">Question: <input type="text" name="Question" id="question" ></label>
            <input type="submit" value="Save">
        </form>
            
        </div>
    </div>
    
@endsection  