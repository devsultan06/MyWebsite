<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
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
            <!-- <button class="close-menu" id="closeMenu">
                <i class="fa-solid fa-times"></i>
            </button> -->
        </div>
    </nav>

    <div class="cart-title">
        <h1> <span class="highlight">/</span>payment</h1>
        <p>Let's make your transaction easier</p>
    </div>


    <div class="productdetails-page">
        <div class="product-details">
            @if (isset($product->image_path) && file_exists(public_path('storage/' . $product->image_path)))
            <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}">
            @else
            <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}">
            @endif
            <h3>Name:{{ $product->name }}</h3>
            <p class="price">Price: ${{ number_format($product->price, 2) }}</p>
            <p>Description: {{ $product->description }}</p>
            <p>Quantity Available: {{ $product->quantity }}</p>
        </div>

        <div class="payment-form">
            <h3>Payment Details</h3>
            <form id="paymentForm" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">

                <div class="form-group1">
                    <label for="cardName">Cardholder's Name</label>
                    <input type="text" id="cardName" name="cardName" required>
                </div>

                <div class="form-group1">
                    <label for="cardNumber">Card Number</label>
                    <input type="text" id="cardNumber" name="cardNumber" maxlength="16" required>
                </div>

                <div class="form-group1">
                    <label for="expiryDate">Expiry Date</label>
                    <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YY" required>
                </div>

                <div class="form-group1">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" maxlength="3" required>
                </div>

                <button type="submit" class="pay">Pay Now</button>
            </form>
        </div>
    </div>
    <script
        src="https://kit.fontawesome.com/b13eb6739b.js"
        crossorigin="anonymous">
    </script>

    @vite('resources/js/app.js')

    <script>
        document.getElementById('paymentForm').addEventListener('submit', function(event) {
            event.preventDefault();

            var productName = "{{ $product->name }}";
            var productPrice = "{{ number_format($product->price, 2) }}";
            var productQuantity = "{{ $product->quantity }}";

            var message = `
        Transaction Successful!
        \n\nProduct: ${productName}
        \nPrice: $${productPrice}
        \nQuantity Purchased: 1 (You have ${productQuantity} left)
        \n\nYour purchase was successful and the payment has been processed. Thank you for shopping with us!
        \n\nYou will receive an order confirmation email shortly.`;

            alert(message);

            document.getElementById('paymentForm').reset();

            window.location.href = '/thank-you';

        });
    </script>

</body>

</html>