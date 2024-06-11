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
            color: #c2a77c;
            background-color: white;
        }
        .about-us {
            padding: 50px;
            background-color: whitesmoke;
            color: black;
        }
        .section {
            background-color: #fff5dc;
            color: black;
            padding: 30px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .section:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }    
        .section h2 {
            color: black; /* Updated color to black */
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        .section p {
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

    <div class="about-us">
        <h1 style="text-align: center; margin-bottom: 30px;">About Us</h1>
        <div class="section">
            <h2>Mission:</h2>
            <p>Our mission is to provide a welcoming environment for lifelong learning, fostering a love of reading, and offering access to a diverse range of resources and information.</p>
        </div>
        <div class="section">
            <h2>Vision:</h2>
            <p>Our vision is to become a leading hub for literary exploration, innovation, and education, empowering individuals to reach their full potential. We envision a community where knowledge, creativity, and discovery flourish.</p>
        </div>
        <div class="section">
            <h2>About Our System</h2>
            <p>The LiteraTech Hub (Library Management System) project aims to develop a comprehensive solution to enhance the efficiency, accessibility, and user experience of library services. Key features include cataloging, circulation, inventory management, user management, search and discovery, and reporting and analytics. The system will be built using a modular architecture and modern web technologies to ensure scalability, flexibility, and security. Stakeholders include library staff, patrons, and administrators. The project will progress through phases of requirements gathering, design and development, testing and quality assurance, deployment and training, and maintenance and support. Expected benefits include improved efficiency, enhanced user experience, data-driven decision-making, and scalability.</p>
        </div>
        <div class="section" style="display: flex; justify-content:center ;">
            <img src="images/chart.png" alt="Organizational Chart" style="height: 950px;">
        </div>
    </div>

</body>
</html>
