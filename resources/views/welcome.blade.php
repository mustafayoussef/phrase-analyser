@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
    <h1 class="p-5 font-italic font-weight-bold shadow bg-info text-white text-center">Test 2: Phrase analyser </h1>
    <h5 class="p-3 mb-0 font-italic font-weight-bold shadow bg-secondary text-white text-left">Description</h5>
    <p class="p-3 mb-0 font-italic font-weight-bold shadow bg-white text-left text-dark">
        Create a web application that will analyses customer input and provide some statistics. <br>
        Run flow: <br>
        Step 1. Customer is asked to insert a string (no longer than 255 chars)<br>
        Step 2. Customer submits the data and receives a grid overview with character statistics.<br>
        column1 - character symbol<br>
        column2 - how many times character encountered.<br>
        column3 - sibling character info: character was seen standing before [list of chars], after [list of chars], longest
        distance between chars is 10 (in case of 2 or more characters).<br>
        Guidance: <br>
        - use framework if needed. using composer is a plus <br>
        - Using Db is not required in this assignment <br>
        - Assignment should be implemented using objects arranged into graph <br>
        - Write a phpunit for function that will traverse the graph. [plus] <br>
        Example: <br>
        String 'football vs soccer' should output: <br>
        f : 1 : before: o after: none <br>
        o : 3 : before: o,t,c after: o,f,s max-distance: 10 chars<br>
        t : 1 : before: b, after: o</p>
    <h6 class="p-3 m-0 font-italic font-weight-bold shadow bg-secondary text-right text-white">Mustafa Mohamed</h6>
    
@endsection