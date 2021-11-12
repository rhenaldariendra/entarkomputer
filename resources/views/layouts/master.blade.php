<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Asset/CSS/master.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Home</title>
</head>
<body>
    <div class="navbar">
        <div class="navbar-left">
            <img src="/Asset/Image/Logo.svg" alt="" srcset="">
        </div>

        <div class="navbar-right">
            <li class="navlist-item">
                <a href="#" class="item active">Home</a>
            </li>
            <li class="navlist-item">
                <a href="#" class="item">Shop</a>
            </li>
            <li class="navlist-item">
                <a href="#" class="item">Testimonial</a>
            </li>
            <li class="navlist-item">
                <a href="#" class="item">About Us</a>
            </li>
            <li class="navlist-item">
                <a href="/login" class="item">Login</a>
            </li>
        </div>
    </div>




    <div class="container">
        @yield('content')
    </div>




    <div class="footer">
        <div class="footer-logo">
            <img src="/Asset/Image/Logo.svg" alt="">
        </div>

        <div class="footer-link">
            <div class="foot-container">
                <p>About</p>
                <a href="#">Reviews</a>
                <a href="#">Blog</a>
                <a href="#">FAQs</a>
            </div>
            <div class="foot-container">
                <p>Contact</p>
                <a href="#">Partnership</a>
                <a href="#">Careers</a>
                <a href="#">Contact Us</a>
            </div>
            <div class="foot-container">
                <p>Support</p>
                <a href="#">Get Help</a>
                <a href="#">Troubleshooting</a>
                <a href="#">Report a Bug</a>
            </div>
        </div>

        <div class="footer-copyright">
            <p><i class="far fa-copyright"></i> 2021 EntarKomputer</p>
        </div>
        <hr>

        <div class="footer-bottom">
            <div class="footer-left">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
            </div>
            <div class="footer-right">
                <p>CONNECT WITH US</p>
                <div class="right-bottom">
                    <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
