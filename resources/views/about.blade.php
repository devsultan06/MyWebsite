<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="logo">
                <img src="{{ asset('images/Logo.png') }}" alt="Logo">Sultan
            </a>
            <button class="menu-toggle" id="menuToggle">
                <i class="fa-solid fa-bars"></i>
            </button>
            <ul class="nav-links" id="navLinks">

                <li><a href="{{ url('/') }}"><span>#</span>home</a></li>
                <li><a href=" {{ route('about') }}" class="active"><span>#</span>about-me</a></li>
                <li><a href="{{ route('products') }}"><span>#</span>products</a></li>
                <li><a href="{{ route('cart') }}"><span>#</span>add-to-cart</a></li>
            </ul>
            <button class="close-menu" id="closeMenu">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
    </nav>

    <div class="about-me">
        <h1> <span class="highlight">/</span>about-me</h1>
        <p>Who am i?</p>
    </div>

    <div class="container">
        <div class="text">
            <p style="margin-bottom: 20px;">Hello, I'm Sultan!</p>
            <p style="margin-bottom: 20px;">I'm a self-taught front-end developer based in Ibadan, Nigeria. I can develop responsive websites from scratch and raise them into modern user-friendly web experiences.</p>
            <p>Transforming my creativity and knowledge into a websites has been my passion for over a year. I have been helping various clients to establish their presence online. I always strive to learn about the newest technologies and frameworks to enhance my skills and deliver the best results.</p>
        </div>
        <div class="image">
            <img src="{{ asset('images/pp2.png') }}" alt="Profile Picture">
        </div>
    </div>
    <script
        src="https://kit.fontawesome.com/b13eb6739b.js"
        crossorigin="anonymous">
    </script>
    @vite('resources/js/app.js')

</body>

</html>