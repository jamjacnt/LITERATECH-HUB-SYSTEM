<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background-color: #c2a77c;
            color: white;
            border-bottom: 4px solid #e1d2a6;
        }
        .header-left {
            display: flex;
            align-items: center;
        }
        .header-left img {
            width: 100px;
            margin-right: 15px;
        }
        .header-left span {
            font-size: 1.5em;
            font-weight: bold;
        }
        .header-right a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s, background-color 0.3s;
            padding: 8px 15px;
            border-radius: 4px;
        }
        .header-right a:hover {
            color: #f4e1d2;
            background-color: #333;
        }
        .main-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px;
            background-color: #fff5dc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
            border-radius: 10px;
        }
        .main-content-left {
            max-width: 50%;
        }
        .main-content-left h1 {
            font-size: 2.5em;
            color: black;
            margin-bottom: 20px;
        }
        .main-content-left p {
            font-size: 1.2em;
            color: black;
            margin: 20px 0;
        }
        .cta-button {
            display: inline-block;
            padding: 15px 25px;
            font-size: 1em;
            color: #fff;
            background-color: #c8ad7f;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .cta-button:hover {
            background-color: #b09166;
        }
        .main-content-right img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 768px) {
            .main-content {
                flex-direction: column;
                text-align: center;
            }
            .main-content-left, .main-content-right {
                max-width: 100%;
            }
        }

        .footer {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 20px 50px;
            background-color: #FFF5DC;
            color: black;
            border-top: 3px solid #E1D2A6;
        }
        .footer-left, .footer-right {
            flex: 1;
            min-width: 300px;
            margin: 10px 0;
        }
        .footer-left {
            text-align: left;
        }
        .footer-left img {
            width: 150px;
            margin-bottom: 10px;
        }
        .footer-left div {
            margin: 5px 0;
        }
        .footer-right h3 {
            color: black;
            margin-bottom: 10px;
        }
        .footer-right p, .footer-right a {
            color: black;
            margin: 5px 0;
            text-decoration: none;
        }
        .footer-right .social-media a {
            display: inline-block;
            margin: 5px;
            color: blue;
            text-decoration: none;
            transition: color 0.3s;
        }
        .footer-right .social-media a:hover {
            color: black;
        }
        .footer-bottom {
            text-align: center;
            padding: 10px;
            background-color: #C2A77C;
            color: black;
            border-top: 1px solid #e1d2a6;
        }
        .footer-bottom p {
            margin: 0;
        }
    </style>
</head>
<body>

    <header class="header">
        <div class="header-left">
            <img src="images/logo.png" alt="LiteraTech Hub Logo">
            <span>LiteraTech Hub</span>
        </div>
        <nav class="header-right">
            <a href="index.php">Home</a>
            <a href="catalog.php">Catalog</a>
            <a href="services.php">Services</a>
            <a href="about-us.php">About Us</a>
            <a href="guide-us.php">Guide Us</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>

    <div class="main-content">
        <div class="main-content-left">
            <h1>Welcome to LiteraTech Hub</h1>
            <p>Navigate Your Literary Landscape</p>
            <p>Your gateway to seamless library operations.</p>
            <a href="login.php" class="cta-button">Get Started <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="main-content-right">
            <img src="images/book.png" alt="Library Image">
        </div>
    </div>

    <footer>
        <div class="footer">
            <div class="footer-left">
                <img src="images/logo1.png" alt="MOPLIC Logo">
                <div><strong>MOPLIC PL</strong></div>
                <div>Misamis Occidental Provincial Library and Information Center</div>
            </div>
            <div class="footer-right">
                <div class="contact-info">
                    <h3>Contact Us</h3>
                    <p>Address: Lower Lamac, Capitol, Oroquieta City</p>
                    <p>Tel. No.: (088) 531 0054</p>
                    <p>Email: <a href="mailto:misoccprovinciallibrary@gmail.com">misoccprovinciallibrary@gmail.com</a></p>
                    <p>Hours of Operation: Monday - Friday: 8:00 AM - 5:00 PM</p>
                </div>
                <div class="social-media">
                    <h3>Follow Us</h3>
                    <a href="https://www.facebook.com/yourpage"><i class="fab fa-facebook fa-2x"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 LiteraTech Hub.<br> All rights reserved.<br> Designed by team BG. </p>
        </div>
    </footer>

</body>
</html>
