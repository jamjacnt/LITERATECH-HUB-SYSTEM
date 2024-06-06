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
            background-color: white;
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
            color: #c2a77c;
            background-color: white;
        }
        .services {
            padding: 50px;
            background-color: whitesmoke;
            color: black;
        }
        .service {
            background-color: #fff5dc;
            padding: 30px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .service:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }    
        .check-icon {
            color: #5cb85c;
            font-size: 2em;
            margin-right: 20px;
        }
        .service h2 {
            color: black; /* Updated color to black */
            font-size: 1.5em;
            margin-bottom: 10px;
            margin-top: 0;
        }
        .service p {
            color: black; /* Updated color to black */
            margin-top: 0;
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

    <div class="services">
        <h1 style="text-align: center; margin-bottom: 30px;">Reader's Services</h1>
        <div class="service">
            <i class="fas fa-check-circle check-icon"></i>
            <div>
                <h2>Reader's Advisory</h2>
                <p>assistance to readers on library resources utilization.</p>
            </div>
        </div>
        <div class="service">
            <i class="fas fa-check-circle check-icon"></i>
            <div>
                <h2>Printing/Photocopying</h2>
                <p>limited copies only.</p>
            </div>
        </div>
        <div class="service">
            <i class="fas fa-check-circle check-icon"></i>
            <div>
                <h2>Children's Library Services</h2>
                <p>story telling, arts and craft activity, fil showing, etc.</p>
            </div>
        </div>
        <div class="service">
            <i class="fas fa-check-circle check-icon"></i>
            <div>
                <h2>Internet, computer use</h2>
                <p>limited time only.</p>
            </div>
        </div>
        <div class="service">
            <i class="fas fa-check-circle check-icon"></i>
            <div>
                <h2>Reading area</h2>
                <p>for Filipiniana and foreign resources.</p>
            </div>
        </div>
        <!-- Add more services as needed -->
    </div>

</body>
</html>
