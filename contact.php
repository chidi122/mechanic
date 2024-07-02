<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Mechanic Shop</title>
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
        form {
            display: flex;
            flex-direction: column;
        }
        form label, form input, form textarea {
            margin-bottom: 10px;
            width: 100%;
            padding: 10px;
        }
        form input[type="submit"] {
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
            padding: 15px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Mechanic Shop</h1>
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
        <h2>Contact Us</h2>
        <form action="contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <input type="submit" value="Submit">
        </form>
        <?php
        include 'db_connect.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $conn->real_escape_string($_POST['name']);
            $email = $conn->real_escape_string($_POST['email']);
            $message = $conn->real_escape_string($_POST['message']);

            $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

            if ($conn->query($sql) === TRUE) {
                echo "<p>Thank you for contacting us, $name. We will get back to you shortly.</p>";
            } else {
                echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
            }
        }

        $conn->close();
        ?>
    </main>
    <footer>
        <p>&copy; 2024 Rudi's Shop. All rights reserved.</p>
    </footer>
</body>
</html>
