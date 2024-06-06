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
        }
        .guide-section h2 {
            color: black;
            margin-bottom: 20px;
            text-align: center;
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
        .guide-image div {
            margin-right: 20px;
        }
        .guide-image img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            /* Adjust the max-width and max-height properties */
            max-width: 600px;
            height: 400px;
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
        <h1>Guide</h1>

        <div class="guide-section">
            <h2>Welcome to Misamis Occidental Provincial Library and Information Center!</h2>
            <p>We're here to ensure that your experience with us is seamless and enriching. Whether you're a first-time visitor or a regular patron, our dedicated team is committed to guiding you through the wealth of resources and services available at our library.</p>
            <div class="guide-image">
                <div>
                    <img src="images/map1.png" alt="Location Map">
                </div>
                <div>
                    <img src="images/map2.png" alt="Location Map">
                </div>
            </div>
        
        <div class= "guide-image" style="display: flex; justify-content: center; ">

            <img src="images/steps.png" alt="Location Map" style=" height: 950px;">
        </div>
        </div>

    </div>

</body>
</html>
