@extends('layouts.app')

@section('content')
    <h2>Edit Task: {{ $task->name }}</h2>
    <form method="POST" action="{{ route('tasks.update', $task->id) }}">
        @csrf
        @method('PUT')    

        <label for="name">New Task Name:</label>
        <input type="text" name="name" value="{{ $task->name }}" required>

        <button type="submit">Update Task Information</button>
@endsection