@extends('layouts.app')

@section('content')

    <div class="text-center" >
        <h1>Update your task</h1>
        <x-alert>
            
        </x-alert>
        <form action="{{ route('todo.update', $todo->id) }}" method="post" >
           @csrf
           @method('patch')
            <input type="text" name="title" value="{{$todo->title}}" />

            <input type="button" value="update">
        </form>
    </div>
    <a href="/todos">Back</a>


@endsection