<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}
$user = $_SESSION["user"];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Quiz Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right,rgb(70, 63, 56),rgb(238, 233, 233));
            text-align: center;
            padding: 50px;
        }

        h2 {
            color: #333;
        }

        .card-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 40px;
            flex-wrap: wrap;
            animation: fadeIn 1s ease-in;
        }

        .card {
            background: #f9f9f9;
            border-radius: 15px;
            padding: 30px;
            width: 200px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            animation: slideUp 0.6s ease forwards;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.2);
        }

        .card a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            display: block;
        }

        .info {
            margin-top: 30px;
        }

        @keyframes slideUp {
            from {
                transform: translateY(40px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .logout {
            margin-top: 20px;
            display: inline-block;
            padding: 10px 20px;
            background: rgb(255, 77, 77);
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s;
        }

        .logout:hover {
            background: rgb(77, 255, 130);
        }
    </style>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($user["username"]); ?>!</h2>
    <p>Email: <?php echo htmlspecialchars($user["email"]); ?></p>
    <h1><p> Start improving your knowledge with our quizzes</p></h1>
    
    <a class="logout" href="my_results.php">History</a>
    <a class="logout" href="about.php">About us</a>
    <a class="logout" href="logout.php">Logout</a>
    <h1><p> Choose your subject to take a quiz:</p></h1>
    <div class="card-container">
        <div class="card">
            <a href="quiz_php.php">PHP Quiz</a>
        </div>
        <div class="card">
            <a href="quiz_html.php">HTML Quiz</a>
        </div>
        <div class="card">
            <a href="quiz_js.php">JavaScript Quiz</a>
        </div>
        <div class="card">
            <a href="quiz_networking.php">Networking Quiz</a>
        </div>
        <div class="card">
            <a href="quiz_aptitude.php">Aptitude Quiz</a>
        </div>
        <div class="card">
            <a href="quiz_logical.php">Logical Quiz</a>
        </div>
    </div>
</body>
</html>
