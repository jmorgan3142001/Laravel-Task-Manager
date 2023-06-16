@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Task List</h2>

        @if($tasks != null)
            <table class="table" id="task-table">
                <thead>
                    <tr>
                        <th>Task Name</th>
                        <th>Priority</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr class='bg-success' data-id="{{ $task->id }}">
                            <td>{{ $task->name }}</td>
                            <td>{{ $task->priority }}</td>
                            <td>
                                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit</a>
                                <form method="POST" action="{{ route('tasks.delete', $task->id) }}" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>            
        @else
            <div>No tasks found in database!</div>
        @endif

        <h3>Add New Task:
        <form method="POST" action={{ route('tasks.store') }}>
            @csrf
            @method('POST')  

            <label for="name">New Task Name:</label>
            <input type="text" name="name" required>
    
            <button type="submit">Add New Task</button>
    </div>
@endsection