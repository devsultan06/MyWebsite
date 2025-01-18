<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
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

                <li><a href="{{ url('/') }}" class="active"><span>#</span>home</a></li>
                <li><a href="{{ route('about') }}"><span>#</span>about-me</a></li>
                <li><a href="{{ route('products') }}"><span>#</span>products</a></li>
                <li><a href="{{ route('addproduct') }}"><span>#</span>add-product</a></li>
            </ul>
            <!-- <button class="close-menu" id="closeMenu">
                <i class="fa-solid fa-times"></i>
            </button> -->
        </div>
    </nav>
    <div class="thank-you-page">
        <img src="{{ asset('images/thank.png') }}" alt="Thanks Image" class="thank-image">

        <h1>Thank You for Your Purchase!</h1>
        <p>Your transaction was successful. We appreciate your business and hope you enjoy your product.</p>
        <a href="{{ route('products') }}" class="btn">Return to Products</a>
    </div>


    <script
        src="https://kit.fontawesome.com/b13eb6739b.js"
        crossorigin="anonymous">
    </script>
    @vite('resources/js/app.js')
</body>

</html>