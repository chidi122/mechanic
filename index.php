<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Mechanic Shop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
            position: sticky;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            margin: 0;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }
        .hero {
            background: url('https://cdn.pixabay.com/photo/2022/11/30/00/49/mechanic-7625592_1280.jpg') no-repeat center center/cover;
            height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            padding: 0 20px;
        }
        .hero h1 {
            font-size: 48px;
            margin: 0;
        }
        .hero p {
            font-size: 24px;
            margin: 10px 0 20px;
        }
        .hero a {
            display: inline-block;
            padding: 10px 20px;
            color: white;
            background-color: #e94e77;
            text-decoration: none;
            font-size: 18px;
            border-radius: 5px;
        }
        .services {
            padding: 60px 20px;
            background-color: #fff;
            text-align: center;
        }
        .services h2 {
            font-size: 36px;
            margin-bottom: 40px;
        }
        .service-card {
            display: inline-block;
            width: 30%;
            margin: 10px;
            padding: 20px;
            background-color: #f9f9f9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .service-card h3 {
            font-size: 24px;
            margin: 0 0 10px;
        }
        .service-card p {
            font-size: 16px;
            color: #555;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Rudis Mechanic Shop</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="hero">
        <div>
            <h1>Willkommen in unserer Werkstatt!</h1>
            <p>Zuverlässige, professionelle und bezahlbare Autoreparaturdienste</p>
            <a href="services.php">Entdecken Sie unsere Dienstleistungen</a>
        </div>
    </div>
    <div class="services">
        <h2>Our Services</h2>
        <div class="service-card">
            <h3>Oil Change</h3>
            <p>Keep your engine running smoothly with our top-quality oil change service.</p>
        </div>
        <div class="service-card">
            <h3>Brake Repair</h3>
            <p>Ensure your safety with our expert brake repair and maintenance services.</p>
        </div>
        <div class="service-card">
            <h3>Engine Diagnostics</h3>
            <p>Get to the root of your car problems with our advanced engine diagnostics.</p>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Rudi's Shop. All rights reserved.</p>
    </footer>
</body>
</html>
