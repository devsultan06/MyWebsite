<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
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
                <li><a href=" {{ route('about') }}"><span>#</span>about-me</a></li>
                <li><a href="{{ route('products') }}" class="active"><span>#</span>products</a></li>
                <li><a href="{{ route('cart') }}"><span>#</span>add-to-cart</a></li>
            </ul>
            <button class="close-menu" id="closeMenu">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
    </nav>

    <div class="products-title">
        <h1> <span class="highlight">/</span>products</h1>
        <p>List of my products</p>
    </div>

    <div class="products">
        <p class="explore">Explore our amazing product collection.</p>
        <div class="product-grid">
            <div class="product-card">
                <img src="{{ asset('images/product1.webp') }}" alt="Product 1">
                <h3>Wireless Headphones</h3>
                <p class="price">$120.00</p>
                <p>High-quality wireless headphones with noise cancellation and 20-hour battery life.</p>
                <div class="product-links">
                    <a href="#">Buy Now</a>
                    <a href="#">Add to Cart</a>
                </div>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/product2.jpg') }}" alt="Product 2">
                <h3>Smartwatch Pro</h3>
                <p class="price">$200.00</p>
                <p>Track your fitness goals with this stylish smartwatch featuring heart rate monitoring and GPS.</p>
                <div class="product-links">
                    <a href="#">Buy Now</a>
                    <a href="#">Add to Cart</a>
                </div>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/product3.jpg') }}" alt="Product 3">
                <h3>Bluetooth Speaker</h3>
                <p class="price">$80.00</p>
                <p>Portable Bluetooth speaker with rich sound and water-resistant design for outdoor use.</p>
                <div class="product-links">
                    <a href="#">Buy Now</a>
                    <a href="#">Add to Cart</a>
                </div>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/product4.webp') }}" alt="Product 4">
                <h3>Gaming Mouse</h3>
                <p class="price">$50.00</p>
                <p>Ergonomic gaming mouse with customizable RGB lighting and precision sensor.</p>
                <div class="product-links">
                    <a href="#">Buy Now</a>
                    <a href="#">Add to Cart</a>
                </div>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/product4.webp') }}" alt="Product 4">
                <h3>Gaming Mouse</h3>
                <p class="price">$50.00</p>
                <p>Ergonomic gaming mouse with customizable RGB lighting and precision sensor.</p>
                <div class="product-links">
                    <a href="#">Buy Now</a>
                    <a href="#">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>




    <script
        src="https://kit.fontawesome.com/b13eb6739b.js"
        crossorigin="anonymous">
    </script>
    @vite('resources/js/app.js')

</body>

</html>