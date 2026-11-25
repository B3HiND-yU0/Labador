
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - RealJokes Clothing</title>

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
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: white;
            font-size: 24px;
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


        .header {
            background: #222;
            color: white;
            text-align: center;
            padding: 65px 20px;
        }

        .header h1 {
            font-size: 38px;
            margin-bottom: 15px;
            letter-spacing: 2px;
        }

        .header p {
            color: #ccc;
            font-size: 17px;
        }


        .content {
            max-width: 900px;
            margin: 50px auto;
            padding: 40px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            text-align: center;
        }

        .content h2 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #222;
        }

        .content p {
            font-size: 17px;
            line-height: 1.8;
            color: #555;
            margin-bottom: 15px;
        }

        .highlight {
            color: #e67e22;
            font-weight: bold;
        }


        .info-section {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 25px;
            padding: 20px;
            margin-bottom: 40px;
        }

        .info-card {
            background: white;
            width: 300px;
            padding: 30px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .info-card:hover {
            transform: translateY(-5px);
        }

        .info-card h2 {
            color: #e67e22;
            margin-bottom: 15px;
        }

        .info-card p {
            color: #555;
            line-height: 1.7;
        }

        .icon {
            font-size: 40px;
            margin-bottom: 15px;
        }


        footer {
            background: #111;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 30px;
        }


        @media (max-width: 600px) {
            nav {
                flex-direction: column;
                gap: 15px;
            }

            nav a {
                margin: 0 5px;
                font-size: 13px;
            }

            .header h1 {
                font-size: 28px;
            }

            .content {
                margin: 25px 15px;
                padding: 25px;
            }

            .info-card {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <nav>
        <div class="logo">RealJokes.</div>

        <div>
            <a href="{{ route('index') }}">Home</a>
            <a href="{{ route('about') }}" class="active">About</a>
            <a href="{{ route('products') }}">Products</a>
            <a href="{{ route('contact') }}">Contact</a>
        </div>
    </nav>


    <div class="header">
        <h1>ABOUT REALJOKES CLOTHING</h1>
        <p>More Than Fashion, It's Your Identity.</p>
    </div>


    <div class="content">
        <h2>Who We Are</h2>

        <p>
            Welcome to <span class="highlight">RealJokes Clothing!</span>
            We are a clothing brand that believes fashion
            is a way to express your personality and style.
        </p>

        <p>
            Our goal is to provide fashionable, comfortable,
            and affordable clothing for everyone.
            We want every customer to feel confident
            and comfortable with what they wear.
        </p>

        <p>
            Thank you for supporting RealJokes Clothing!
        </p>
    </div>


    <div class="info-section">

        <div class="info-card">
            <div class="icon"></div>
            <h2>Our Mission</h2>
            <p>
                To provide stylish, quality, and affordable
                clothing that helps people express themselves
                with confidence.
            </p>
        </div>

        <div class="info-card">
            <div class="icon"></div>
            <h2>Our Vision</h2>
            <p>
                To become a trusted clothing brand known
                for creativity, quality, and unique fashion.
            </p>
        </div>

    </div>


</body>
</html>
