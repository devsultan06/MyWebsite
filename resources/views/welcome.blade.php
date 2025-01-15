<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sultan</title>
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

                <li><a href="#home" class="active"><span>#</span>home</a></li>
                <li><a href="#about-me"><span>#</span>about-me</a></li>
                <li><a href="#products"><span>#</span>products</a></li>
                <li><a href="#cart"><span>#</span>add-to-cart</a></li>
            </ul>
            <button class="close-menu" id="closeMenu">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-content">
            <div class="text-section">
                <h1>
                    Sultan is a <span class="highlight">web designer</span> and
                    <span class="highlight">front-end developer</span>
                </h1>
                <p class="description">
                    He crafts responsive websites where technologies meet creativity
                </p>
                <button class="contact-btn">Contact me!!</button>
            </div>
            <div class="image-section">
                <img src="{{ asset('images/pp.png') }}" alt="Profile-Picture" class="profile-pic">
            </div>
        </div>
    </section>

    <div class="quote">
        <img src="{{ asset('images/quote.png') }}" alt="Profile-Picture" class="profile-pic">

    </div>

    <script
        src="https://kit.fontawesome.com/b13eb6739b.js"
        crossorigin="anonymous">
    </script>
    @vite('resources/js/app.js')
</body>

</html>