<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Mechanic Shop</title>
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
            padding: 10px 0;
            text-align: center;
        }
        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
        }
        main {
            padding: 20px;
            max-width: 800px;
            margin: auto;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .service {
            margin-bottom: 20px;
        }
        .service h3 {
            margin: 0;
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
    <main>
        <h2>Our Services</h2>
        <?php
        include 'db_connect.php';
        
        $sql = "SELECT * FROM services";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='service'><h3>" . $row["service_name"] . "</h3><p>" . $row["description"] . "</p></div>";
            }
        } else {
            echo "<p>No services available at the moment.</p>";
        }
        ?>
    </main>
    <footer>
        <p>&copy; 2024 Rudi's Shop. All rights reserved.</p>
    </footer>
</body>
</html>
