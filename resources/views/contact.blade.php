@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Contact Me</h1>
    <form action="{{ route('contact') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
</div>
@endsection