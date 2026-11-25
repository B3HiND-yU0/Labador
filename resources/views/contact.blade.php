
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - RealJokes Clothing</title>

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

      
        .container {
            padding: 50px 20px;
            text-align: center;
        }

        .container h2 {
            font-size: 30px;
            margin-bottom: 15px;
        }

        .description {
            color: #666;
            margin-bottom: 35px;
        }

        .contact-cards {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 25px;
        }

        .contact-card {
            background: white;
            width: 280px;
            padding: 30px 20px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .contact-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }

        .icon {
            font-size: 40px;
            margin-bottom: 15px;
        }

        .contact-card h3 {
            font-size: 20px;
            margin-bottom: 12px;
        }

        .contact-card p {
            color: #666;
            font-size: 15px;
            overflow-wrap: anywhere;
        }

        .contact-card a {
            color: #e67e22;
            text-decoration: none;
            font-weight: bold;
        }

        .contact-card a:hover {
            text-decoration: underline;
        }


        .message {
            background: white;
            max-width: 700px;
            margin: 40px auto;
            padding: 35px 20px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .message h2 {
            margin-bottom: 15px;
        }

        .message p {
            color: #666;
            line-height: 1.7;
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

            .contact-card {
                width: 100%;
                max-width: 350px;
            }
        }
    </style>
</head>

<body>


    <nav>
        <div class="logo">RealJokes.</div>

        <div>
            <a href="{{ route('index') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('products') }}">Products</a>
            <a href="{{ route('contact') }}" class="active">Contact</a>
        </div>
    </nav>


    <div class="header">
        <h1>CONTACT US</h1>
        <p>We'd Love to Hear From You!</p>
    </div>


    <div class="container">

        <h2>Get In Touch</h2>

        <p class="description">
            Have questions about our products?
            Feel free to contact us!
        </p>

        <div class="contact-cards">

   
            <div class="contact-card">
                <div class="icon"></div>
                <h3>Email Us</h3>
                <p>
                    <a href="mailto:realjokesclothing@gmail.com">
                        realjokesclothing@gmail.com
                    </a>
                </p>
            </div>

            <div class="contact-card">
                <div class="icon"></div>
                <h3>Call Us</h3>
                <p>
                    <a href="tel:0955555555">
                        0955555555
                    </a>
                </p>
            </div>

          
            <div class="contact-card">
                <div class="icon"></div>
                <h3>Facebook</h3>
                <p>
                    RealJokes Clothing
                </p>
            </div>

        </div>

        
        <div class="message">
            <h2>Thank You for Visiting!</h2>
            <p>
                We appreciate your interest in RealJokes Clothing.
                Your support means a lot to us.
                Stay stylish and keep expressing yourself!
            </p>
        </div>

    </div>


</body>
</html>
