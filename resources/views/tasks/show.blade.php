@extends('layouts.app')

@section('content')
    <h1>{{ $task->title }}</h1>

    <p>{{ $task->description }}</p>

    <p>Status: {{ $task->status }}</p>

    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit</a>

    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this task?')">Delete</button>
    </form>
@endsection
