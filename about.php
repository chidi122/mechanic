<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Mechanic Shop</title>
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
        .about-section {
            padding: 60px 20px;
            background: url('https://cdn.pixabay.com/photo/2017/11/17/10/30/adam-opel-ag-2957061_1280.png') no-repeat center center/cover;
            color: white;
            text-align: center;
        }
        .about-section h2 {
            font-size: 36px;
            margin-bottom: 40px;
        }
        .about-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: left;
            background-color: rgba(0, 0, 0, 0.9); /* semi-transparent background */
            padding: 20px;
            border-radius: 10px;
        }
        .about-content img {
            float: left;
            margin-right: 20px;
            width: 200px;
            height: auto;
            border-radius: 10px;
        }
        .about-content p {
            font-size: 18px;
            color: #ccc;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 20px;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Rudis mechanic Shop</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="about-section">
        <h2>About Us</h2>
        <div class="about-content">
            <img src="https://cdn.pixabay.com/photo/2024/05/11/10/28/ai-generated-8754607_1280.jpg" alt="About Us">
            <p>Willkommen in unserer Werkstatt! Seit über 100 Jahren bieten wir unserer Gemeinschaft zuverlässige und professionelle Autoreparaturdienste an. Unser Ziel ist es, erstklassigen Service zu bieten und Kundenzufriedenheit sicherzustellen. Wir sind spezialisiert auf eine Vielzahl von Automobildienstleistungen, von der regelmäßigen Wartung bis hin zu komplexen Reparaturen.

Unsere Werkstatt ist mit modernsten Werkzeugen und Technologien ausgestattet, um Probleme an Ihrem Fahrzeug zu diagnostizieren und zu beheben. Wir legen Wert auf Integrität, Fachwissen und hervorragenden Kundenservice. Vertrauen Sie uns, um Ihr Auto reibungslos und sicher auf der Straße zu halten.

Wir glauben an den Aufbau langfristiger Beziehungen zu unseren Kunden. Unser Team steht immer bereit, ehrliche Beratung und transparente Preise anzubieten, damit Sie das beste Preis-Leistungs-Verhältnis erhalten. Besuchen Sie uns und erleben Sie den Unterschied in unserer Werkstatt.</p>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Rudi's Shop. All rights reserved.</p>
    </footer>
</body>
</html>
