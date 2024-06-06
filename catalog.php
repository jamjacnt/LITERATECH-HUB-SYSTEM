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
        .catalog {
            padding: 50px;
            color: black;
        }
        .catalog h1 {
            text-align: center;
            color: black;
            margin-bottom: 40px;
        }
        .catalog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(500px, 1fr));
            gap: 20px;
        }
        .catalog-item {
            background-color: #fff5dc;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .catalog-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .catalog-item img {
            width: auto;
            height: 500px;
        }
        .item-info {
            padding: 20px;
        }
        .item-info h2 {
            font-size: 1.5em;
            color: #8d7d70;
            margin-bottom: 10px;
        }
        .item-info p {
            color: #777;
        }
        @media (max-width: 768px) {
            .catalog-grid {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }
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

    <div class="catalog">
        <h1>Our Catalog</h1>
        <div class="catalog-grid">
            <div class="catalog-item">
                <img src="images/1.png" alt="Item 1">
                <div class="item-info">
                    
                </div>
            </div>
            <div class="catalog-item">
                <img src="images/2.png" alt="Item 2">
                <div class="item-info">
                    
                </div>
            </div>
            <div class="catalog-item">
                <img src="images/3.png" alt="Item 2">
                <div class="item-info">
                    
                </div>
            </div>
            <div class="catalog-item">
                <img src="images/4.png" alt="Item 2">
                <div class="item-info">
                    
                </div>
            </div>
            <div class="catalog-item">
                <img src="images/5.png" alt="Item 2">
                <div class="item-info">
                    
                </div>
            </div>
            <div class="catalog-item">
                <img src="images/6.png" alt="Item 2">
                <div class="item-info">
                    
                </div>
            </div>
            <div class="catalog-item">
                <img src="images/7.png" alt="Item 2">
                <div class="item-info">
                    
                </div>
           
           
            
            </div>
            <!-- Repeat the above structure for other catalog items -->
        </div>
    </div>

</body>
</html>
