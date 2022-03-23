@extends('layouts.app')

@section('content')

    <div align="center" >
        <h1>What next you need to do</h1>
        <x-alert></x-alert>
        <form action="/todos/create" method="post" >
           @csrf
            <input type="text" name="title" id="" />

            <input type="button" value="Create">
        </form>
    </div>
    <a href="/todos">Back</a>

@endsection 

