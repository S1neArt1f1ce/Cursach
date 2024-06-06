<!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
@extends('layout.layout')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cosmos Shop</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                background-color: #1a1a1a;
                color: #f8f9fa;
            }

            .navbar,
            .footer {
                background-color: #0d0d0d;
            }

            .banner {
                background: url('https://img.freepik.com/free-photo/night-sky-glows-with-iridescent-deep-space-generative-ai_188544-11285.jpg?w=1380&t=st=1717696755~exp=1717697355~hmac=114adfd878778b99e2683d56b54705823314e13f3dfbac0ede388b8b98230525') no-repeat center center;
                background-size: cover;
                height: 400px;
                color: white;
                display: flex;
                align-items: center;
                justify-content: center;
                text-align: center;
            }

            .product-card {
                background-color: #262626;
                border: none;
            }

            .product-card img {
                height: 200px;
                object-fit: cover;
            }
        </style>
    </head>

    <body>
        {{-- <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#">Cosmos Shop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cart</a>
                    </li>
                </ul>
            </div>
        </nav> --}}

        <div class="banner">
            <div>
                <h1>Welcome to Cosmos Shop</h1>
                <p>Explore the Universe of Products</p>
                <a href="/market" class="btn btn-primary">Shop Now</a>
            </div>
        </div>

        <div class="container mt-5">
            
        </div>

    </body>

    </html>
@endsection
