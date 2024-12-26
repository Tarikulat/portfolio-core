@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<h1>Projects</h1>
<a href="{{ route('admin.projects.create') }}">Create New Project</a>

<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
        <tr>
            <td>{{ $project->title }}</td>
            <td>{{ $project->description }}</td>
            <td>
                <a href="{{ route('admin.projects.edit', $project->id) }}">Edit</a>
                <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection