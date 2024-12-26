

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Welcome to My Portfolio</h1>
    <p>Expert Laravel Developer</p>
    <a href="{{ route('about') }}">About Me</a> | <a href="{{ route('contact') }}">Contact</a>
</div>
@endsection