<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio')</title>
    <!-- Include compiled CSS -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to My Portfolio</h1>
            <p>Web Developer | Laravel | Vue.js</p>
            <a href="{{ route('contact') }}" class="cta-button">Get in Touch</a>
        </div>
    </section>

    <div class="container">
        @yield('content') <!-- Dynamic content from the individual views -->
    </div>

    <footer class="footer">
        <p>My Laravel Portfolio &copy; {{ date('Y') }}</p>
    </footer>

    <!-- Include compiled JS -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>

<header>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    @yield('content') <!-- Dynamic content from the individual views -->
</div>

<footer>
    <p>My Laravel Portfolio &copy; {{ date('Y') }}</p>
</footer>

<!-- Include compiled JS -->
<script src="{{ mix('js/app.js') }}"></script>
</body>

</html>