<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}
include 'db.php';

$user_id = $_SESSION["user"]["id"];

$stmt = $conn->prepare("SELECT subject, score, total, taken_at FROM quiz_results WHERE user_id = ? ORDER BY taken_at DESC");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Quiz Results</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, rgb(70, 63, 56), rgb(238, 233, 233));
            padding: 40px;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        h2 {
            text-align: center;
            color: #333;
            animation: fadeInDown 1s ease-out;
        }

        table {
            margin: 40px auto;
            border-collapse: collapse;
            width: 80%;
            box-shadow: 0 10px 20px rgba(231, 231, 231, 0.1);
            animation: slideUp 1s ease forwards;
            opacity: 0;
        }

        th, td {
            padding: 15px 20px;
            border: 1px solid #ccc;
            text-align: center;
            font-size: 16px;
        }

        th {
            background-color: #2980b9;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f7f9fc;
        }

        tr:hover {
            background-color: #dff3ff;
            transition: background-color 0.3s ease;
        }

        .spacer {
            flex: 1;
        }

        .home-button {
            text-align: center;
            margin-top: 20px;
            padding-top: 10px;
        }

        .home-button a {
            display: inline-block;
            background-color: #3498db;
            color: white;
            padding: 12px 25px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            transition: background 0.3s;
        }

        .home-button a:hover {
            background-color: #2c80b4;
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

        @keyframes fadeInDown {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <h2>My Quiz Results</h2>
    <table>
        <tr>
            <th>Subject</th>
            <th>Score</th>
            <th>Out of</th>
            <th>Date</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($row['subject']) ?></td>
            <td><?= $row['score'] ?></td>
            <td><?= $row['total'] ?></td>
            <td><?= date("d M Y, H:i", strtotime($row['taken_at'])) ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

    <div class="spacer"></div> <!-- pushes button to bottom -->

    <div class="home-button">
        <a href="dashboard.php">Go to Home Page</a>
    </div>
</body>
</html>
