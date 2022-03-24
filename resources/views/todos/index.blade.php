@extends('layouts.app')

@section('content')

    <div class="text-center" >
        <h1 class="text-center" >Todo List</h1>
        <a href="/todos/create" style="font-size: 30px; padding: 2px;" >Create New Task</a>
    </div>

        <div class="container">
            @foreach($todos as $todo)
                <div class="row" style="font-size: 20px; padding: 2px; ">
                    <h3>{{$todo->title}}</h3>
                    <a href="{{'/todos/'. $todo->id .'/edit'}}" style="padding-left: 3px;" >Edit</a>
                    <span style="cursor: pointer; color: red; padding-left: 3px;" onclick="
                            if(confirm('You Sure Want to Delete..?')){document.getElementById('form-delete-{{$todo->id}}').submit()}">Delete
                    </span>
            
                    <form action="{{route('todo.delete',$todo->id)}}" id="{{'form-delete-'.$todo->id}}" style="display: none;" method="post">
                        @csrf
                        @method('put')
                    </form>
                </div>
            @endforeach
        </div>
    

@endsection 
