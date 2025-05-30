<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>About Us</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #e0eafc, #cfdef3);
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            padding: 40px 20px;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 40px;
        }

        .team {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: center;
        }

        .card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .name {
            font-size: 20px;
            font-weight: bold;
            color: #34495e;
        }

        .bio {
            font-size: 15px;
            color: #555;
            margin: 15px 0;
        }

        .socials a {
            margin: 0 10px;
            text-decoration: none;
            color: #2980b9;
            font-size: 18px;
        }

        .contact {
            text-align: center;
            margin-top: 40px;
            font-size: 16px;
        }

        .contact a {
            color: #2980b9;
            text-decoration: none;
        }

        .home-button {
            text-align: center;
            margin-top: 30px;
        }

        .home-button a {
            display: inline-block;
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            transition: background 0.3s;
        }

        .home-button a:hover {
            background-color: #2c80b4;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>About Us</h1>
        <div class="team">
            <div class="card">
                <img src="somu.jpg" alt="Person 1">
                <div class="name">K.SOMASEKHAR</div>
                <div class="bio">Full Stack Developer experienced in PHP, JavaScript, and cloud platforms.</div>
                <div class="socials">
                    <a href="https://www.linkedin.com/in/k-somasekhar-naidu-9baa90356?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">LinkedIn</a>
                </div>
            </div>
            <div class="card">
                <img src="siva.jpg" alt="Person 2">
                <div class="name">K.SIVA KUMAR</div>
                <div class="bio">UI/UX Designer focused on intuitive interfaces and user experience.</div>
                <div class="socials">
                    <a href="https://www.linkedin.com/in/siva-kumar-3ab64427a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">LinkedIn</a>
                </div>
            </div>
            <div class="card">
                <img src="saugat.jpg" alt="Person 3">
                <div class="name">SAUGAT KUMAR SAHA</div>
                <div class="bio">Backend Developer with a passion for clean code and scalable systems.</div>
                <div class="socials">
                    <a href="https://www.linkedin.com/in/saugat-saha-72ba4a256?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">LinkedIn</a>
                </div>
            </div>
        </div>

        <div class="contact">
            <p>For any queries, contact us at <a href="contact.php">Click here</a></p>
        </div>

        <div class="home-button">
            <a href="dashboard.php">Go to Home Page</a>
        </div>
    </div>
</body>
</html>
