
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - RealJokes Clothing</title>

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

        nav a:hover {
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
            margin-bottom: 35px;
        }

        .products {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 25px;
        }

        .product {
            background: white;
            width: 260px;
            padding: 15px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .product:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }

        .product img {
            width: 100%;
            height: 230px;
            object-fit: cover;
            border-radius: 10px;
        }

        .product h3 {
            margin: 15px 0 10px;
            font-size: 21px;
        }

        .price {
            color: #e67e22;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .btn {
            display: inline-block;
            background: black;
            color: white;
            text-decoration: none;
            padding: 11px 25px;
            border-radius: 5px;
            transition: 0.3s;
        }

        .btn:hover {
            background: #e67e22;
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

            .product {
                width: 90%;
                max-width: 320px;
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
            <a href="{{ route('contact') }}">Contact</a>
        </div>
    </nav>


    <div class="header">
        <h1>REALJOKES CLOTHING</h1>
        <p>Wear Your Style. Express Yourself.</p>
    </div>


    <div class="container">

        <h2>Our Products</h2>

        <div class="products">

   
            <div class="product">
                <img src="{{ asset('img/shirt.jpg') }}" alt="T-Shirt">

                <h3>T-Shirt</h3>

                <p class="price">₱350</p>

                <a href="{{ route('contact') }}" class="btn">
                    Contact Us
                </a>
            </div>

      
            <div class="product">
                <img src="{{ asset('img/hoodie.jpg') }}" alt="Hoodie">

                <h3>Hoodie</h3>

                <p class="price">₱650</p>

                <a href="{{ route('contact') }}" class="btn">
                    Contact Us
                </a>
            </div>


            <div class="product">
                <img src="{{ asset('img/cap.jpg') }}" alt="Cap">

                <h3>Cap</h3>

                <p class="price">₱250</p>

                <a href="{{ route('contact') }}" class="btn">
                    Contact Us
                </a>
            </div>

        </div>
    </div>

    

</body>
</html>
