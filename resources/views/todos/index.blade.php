@extends('layouts.app')

@section('content')

    <div class="text-center" >
        <h1 class="text-center">ALl Todos</h1>
        <a href="/todos/create" >Create New</a>
    </div>

        <ul class="text-center">
            @foreach($todos as $todo)
                <li>
                    <p>{{$todo->title}}</p>
                    <a href="{{'/todos/'. $todo->id .'/edit'}}" >Edit</a>
                </li>
            @endforeach
        </ul>
    

@endsection 
