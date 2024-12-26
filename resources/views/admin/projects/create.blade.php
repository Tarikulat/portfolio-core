@extends('layouts.app')

@section('title', 'Create Project')

@section('content')
<h1>Create New Project</h1>

<form action="{{ route('admin.projects.store') }}" method="POST">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" required>

    <label for="description">Description</label>
    <textarea name="description" required></textarea>

    <button type="submit">Create</button>
</form>
@endsection