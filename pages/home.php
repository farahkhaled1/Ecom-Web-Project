<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/Style.css">
    <title>Glow Glam | Ecommerce Website</title>

    <style>
        .footer {
            background-color: #24262b;
            padding: 70px 0;
            width: 100%;
            position: fixed 100%;
        }

        .footer-col {
            width: 25%;
            padding: 0 15px;
        }

        .footer-col h4 {
            font-size: 18px;
            color: #ffffff;
            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }

        .footer-col h4::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: -10px;
            background-color: #c23061;
            height: 2px;
            box-sizing: border-box;
            width: 50px;
        }

        .footer-col ul li:not(:last-child) {
            margin-bottom: 10px;
        }

        .footer-col ul li a {
            font-size: 16px;
            text-transform: capitalize;
            color: #ffffff;
            text-decoration: none;
            font-weight: 300;
            color: #bbbbbb;
            display: block;
            transition: all 0.3s ease;
        }

        .footer-col ul li a:hover {
            color: #ffffff;
            padding-left: 8px;
        }

        .footer-col .social-links a {
            display: inline-block;
            height: 40px;
            width: 40px;
            background-color: rgba(255, 255, 255, 0.2);
            margin: 0 10px 10px 0;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            color: #ffffff;
            transition: all 0.5s ease;
        }

        .footer-col .social-links a:hover {
            color: #24262b;
            background-color: #ffffff;
        }

        /*responsive*/
        @media (max-width: 767px) {
            .footer-col {
                width: 50%;
                margin-bottom: 30px;
            }
        }

        @media (max-width: 574px) {
            .footer-col {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <body>


        <div class="header">

            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <a href="home.php"><img src="../images/logo.png" width="125px"></a>
                    </div>

                    <nav>
                        <ul>
                            <li> <a class="nav-items" href="home.php"> Home </a> </li>
                            <li> <a class="nav-items" href="../products/testingproducts.php"> Products </a> </li>
                            <li> <a class="nav-items" href="about.php"> About </a> </li>
                            <li> <a class="nav-items" href="http://localhost/Web-project/pages/login.php"> Log in </a> </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <h1> The Beauty Essentials <br> You Need </h1>
                    <p> Show up and steal the show <br> with an extra boost of confidence. </p>
                    <a href="../products/testingproducts.php" class="btn">Shop Now! </a>
                </div>
                <div class="col-2 img">
                    <img src="../images/pic9.png">
                </div>
            </div>

            <div id="cards">
                <div class="card" style="width: 18rem;">
                    <img src="https://images.unsplash.com/photo-1594125311687-3b1b3eafa9f4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Perfumes</h5>
                        <p class="card-text">A fragrance to match your mood.</p>
                        <a href="#" class="btn">Browse Our Perfumes</a>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1480&q=80" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cosmetics</h5>
                        <p class="card-text">Turn into a glamorous you.</p>
                        <a href="#" class="btn">Browse Cosmetics</a>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="https://images.unsplash.com/photo-1607779097040-26e80aa78e66?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1480&q=80" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Manicures</h5>
                        <p class="card-text">Your manicure speaks to the world for you.</p>
                        <a href="#" class="btn">Browse Manicures</a>
                    </div>
                </div>

            </div>



            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-col">
                            <h4>company</h4>
                            <ul>
                                <li><a href="#">about us</a></li>
                                <li><a href="#">our products</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>get help</h4>
                            <ul>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">shipping</a></li>
                                <li><a href="#">order status</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>online shop</h4>
                            <ul>
                                <li><a href="#">Perfumes</a></li>
                                <li><a href="#">Cosmetics</a></li>
                                <li><a href="#">Manicures</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>follow us</h4>
                            <div class="social-links">
                                <a href="https:\\www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                                <a href="https:\\www.twitter.com"><i class="fab fa-twitter"></i></a>
                                <a href="https:\\www.instagram.com"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

</html>