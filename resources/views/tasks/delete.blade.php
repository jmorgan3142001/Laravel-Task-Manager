@extends('layouts.app')

@section('content')
    <h2>Delete Task: {{ $task->name }}</h2>
    <form method="POST" action="{{ route('tasks.destroy', $task->id) }}">
        @csrf
        @method('DELETE')    

        <button type="submit">Are you sure you want to delete this task?</button>
@endsection