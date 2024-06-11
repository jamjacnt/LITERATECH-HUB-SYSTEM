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
            background-color: #fff5dc;
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
        .guide-us {
            padding: 50px;
        }
        .guide-us h1 {
            text-align: center;
            color: black;
            margin-bottom: 40px;
        }
        .guide-section {
            margin-bottom: 50px;
            color: black;
        }
        .guide-section h2 {
            color: black;
            margin-bottom: 20px;
        }
        .guide-section p {
            color: black;
            line-height: 1.6;
        }
        .guide-image {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .guide-image img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
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

    <div class="guide-us">
        <h1>Contact Us </h1>

        <div class="guide-section">
            <h2>MOPLIC PL</h2>
            <p>Misamis Occidental Provincial Library and Information Center</p>
            <div class="guide-image">
                <img src="images/logo1.png" alt="Logo">
            </div>
        </div>

        <div class="guide-section">
            <h2>Opening Hours</h2>
            <p>Our library is open from Monday to Friday, 8:00 AM to 5:00 PM. We are closed on weekends and public holidays.</p>
        </div>

        <div class="guide-section">
            <h2>Contact Information</h2>
            <p>If you have any inquiries or need assistance, you can reach us at:</p>
            <ul>
                <li>Address: Lower Lamac, Capitol, Oroquieta City</li>
                <li>Tel. No.: (088) 531 0054</li>
                <li>Email: misoccprovinciallibrary@gmail.com</li>
            </ul>
        </div>
    </div>

</body>
</html>
