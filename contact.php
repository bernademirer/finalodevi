<?php

$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "betterboxd";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    
    $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color: green;'>Your message has been saved. Thank you! </p>";
        
    } else {
        echo "<p style='color: red;'>Error".$conn->error. "</p>";
    }
    

    $conn->close();
}
?>

<html>
    
        <head>
            <title>betterboxd</title>
            <link rel="stylesheet" href="contact.css">
        </head>
        <body>
            <header>
                <div class="logo">Betterboxd</div>
                <nav>
                    <ul>
                        <li><a href="anasayfa.html">Home</a></li>
                        <li><a href="giriş_kayit.html">Sign In</a></li>
                        <li><a href="uyeprofili.html">Profil</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </header>
            <div class="container">
                <h1>Get In Contact With Us</h1>
                <form id="contactForm" action="" method="POST">
                    <input id="name" type="text" name="name" placeholder="Name:" required>
                    <input id="email" type="email" name="email" placeholder="Email Address" required>
                    <textarea id="message" name="message" placeholder="Your message" rows="5" required></textarea>
                    <button type="submit">Submit</button>
                </form>

      
    </div>

    <div class="contact-info">
        <h2>Contact Information</h2>
        <p><strong>Address:</strong> Ankara, Türkiye</p>
        <p><strong>Phone:</strong> +905439339810</p>
        <p><strong>E-mail:</strong> bernademirer02@gmail.com</p>
    </div>
</body>
</html>
