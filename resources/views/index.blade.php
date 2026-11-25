
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RealJokes Clothing - Home</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            color: #222;
        }

        nav {
            background: #111;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: white;
            font-size: 25px;
            font-weight: bold;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 12px;
            font-size: 15px;
            transition: 0.3s;
        }

        nav a:hover,
        nav a.active {
            color: orange;
        }


        .hero {
            min-height: 550px;
            background: linear-gradient(
                rgba(0,0,0,0.75),
                rgba(0,0,0,0.75)
            ), url("{{ asset('img/shirt.jpg') }}");

            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 40px 20px;
            color: white;
        }

        .hero-content {
            max-width: 750px;
        }

        .hero h1 {
            font-size: 55px;
            margin-bottom: 20px;
            letter-spacing: 3px;
        }

        .hero h1 span {
            color: orange;
        }

        .hero h2 {
            font-size: 25px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 17px;
            color: #ddd;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            background: orange;
            color: black;
            text-decoration: none;
            padding: 14px 30px;
            border-radius: 5px;
            font-weight: bold;
            transition: 0.3s;
            margin: 5px;
        }

        .btn:hover {
            background: white;
            transform: translateY(-3px);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid white;
            color: white;
        }

        .btn-outline:hover {
            background: white;
            color: black;
        }

        .features {
            padding: 60px 20px;
            text-align: center;
        }

        .features h2 {
            font-size: 30px;
            margin-bottom: 35px;
        }

        .feature-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 25px;
        }

        .feature-card {
            background: white;
            padding: 30px 20px;
            width: 260px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-7px);
        }

        .feature-card .icon {
            font-size: 40px;
            margin-bottom: 15px;
        }

        .feature-card h3 {
            margin-bottom: 12px;
        }

        .feature-card p {
            color: #666;
            line-height: 1.6;
        }


        footer {
            background: #111;
            color: white;
            text-align: center;
            padding: 25px;
        }

        footer p {
            margin: 5px;
            font-size: 14px;
        }


        @media (max-width: 600px) {
            nav {
                flex-direction: column;
                gap: 15px;
                padding: 20px 10px;
            }

            nav a {
                margin: 0 5px;
                font-size: 13px;
            }

            .hero {
                min-height: 450px;
            }

            .hero h1 {
                font-size: 34px;
            }

            .hero h2 {
                font-size: 20px;
            }

            .hero p {
                font-size: 15px;
            }

            .feature-card {
                width: 90%;
            }
        }
    </style>
</head>

<body>

    <nav>
        <div class="logo">RealJokes.</div>

        <div>
            <a href="{{ route('index') }}" class="active">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('products') }}">Products</a>
            <a href="{{ route('contact') }}">Contact</a>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-content">

            <h1>REALJOKES <span>CLOTHING</span></h1>

            <h2>Wear Your Style. Express Yourself!</h2>

            <p>
                Welcome to RealJokes Clothing!
                Discover fashionable, comfortable,
                and affordable clothing that matches
                your personality and style.
            </p>

            <a href="{{ route('products') }}" class="btn">
                Explore Products
            </a>

            <a href="{{ route('about') }}" class="btn btn-outline">
                About Us
            </a>

        </div>
    </section>

   
    <section class="features">

        <h2>Why Choose RealJokes?</h2>

        <div class="feature-container">

            <div class="feature-card">
                <div class="icon"></div>
                <h3>Stylish Clothing</h3>
                <p>
                    Discover trendy clothing
                    that makes you look good
                    and feel confident.
                </p>
            </div>

            <div class="feature-card">
                <div class="icon"></div>
                <h3>Affordable Prices</h3>
                <p>
                    Enjoy fashionable outfits
                    at prices that fit your budget.
                </p>
            </div>

            <div class="feature-card">
                <div class="icon"></div>
                <h3>Quality Products</h3>
                <p>
                    We aim to provide comfortable
                    and quality clothing for everyone.
                </p>
            </div>

        </div>

    </section>

</body>
</html>
