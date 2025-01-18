<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
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
                <li><a href="{{ route('products') }}"><span>#</span>products</a></li>
                <li><a href="{{ route('addproduct') }}" class="active"><span>#</span>add-product</a></li>
            </ul>
            <button class="close-menu" id="closeMenu">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
    </nav>

    <div class="cart-title">
        <h1> <span class="highlight">/</span>add-product</h1>
        <p>Let's help you add some item</p>
    </div>


    <div class="cart-form">

        <form id="cartForm" action="{{ route('storeProduct') }}" method="POST" enctype="multipart/form-data">
            @csrf <!-- Add this line -->
            <div class="form-group">
                <label for="productName">Product Name</label>
                <input type="text" id="productName" name="productName" placeholder="Enter product name" required>
            </div>

            <div class="form-group">
                <label for="productPrice">Price ($)</label>
                <input type="number" id="productPrice" name="productPrice" placeholder="Enter price" min="0" required>
            </div>

            <div class="form-group">
                <label for="productQuantity">Quantity</label>
                <input type="number" id="productQuantity" name="productQuantity" placeholder="Enter quantity" min="1" required>
            </div>

            <div class="form-group">
                <label for="productDescription">Description</label>
                <textarea id="productDescription" name="productDescription" placeholder="Enter product description" required></textarea>
            </div>


            <div class="form-group">
                <label for="productImage">Product Image</label>
                <input type="file" id="productImage" name="productImage" required>
            </div>
            <button type="submit" class="add-btn">Add Product</button>
        </form>

    </div>

    <script
        src="https://kit.fontawesome.com/b13eb6739b.js"
        crossorigin="anonymous">
    </script>

    @vite('resources/js/app.js')

</body>

</html>