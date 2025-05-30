<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}

include 'db.php'; // Ensure this file contains your $conn connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subject = $_POST['subject'] ?? 'Unknown';
    $user_id = $_SESSION["user"]["id"];

    // Define correct answers for each subject
    $answers = [
        "PHP" => [
            "q1" => "c", "q2" => "b", "q3" => "b", "q4" => "a", "q5" => "a",
            "q6" => "a", "q7" => "b", "q8" => "c", "q9" => "b", "q10" => "b"
        ],
        "HTML" => [
            "q1" => "a", "q2" => "b", "q3" => "c", "q4" => "a", "q5" => "a",
            "q6" => "b", "q7" => "a", "q8" => "b", "q9" => "a", "q10" => "a"
        ],
        "JavaScript" => [
            "q1" => "b", "q2" => "a", "q3" => "a", "q4" => "b", "q5" => "a",
            "q6" => "a", "q7" => "b", "q8" => "a", "q9" => "a", "q10" => "a"
        ],
        "Logical" => [
            "q1" => "c", "q2" => "a", "q3" => "b", "q4" => "c", "q5" => "a",
            "q6" => "b", "q7" => "b", "q8" => "c", "q9" => "a", "q10" => "b"
        ],
        "Aptitude" => [
            "q1" => "b", "q2" => "a", "q3" => "b", "q4" => "c", "q5" => "c",
            "q6" => "a", "q7" => "a", "q8" => "b", "q9" => "c", "q10" => "b"
        ],
        "Networking" => [
            "q1" => "c", "q2" => "b", "q3" => "a", "q4" => "b", "q5" => "c",
            "q6" => "a", "q7" => "b", "q8" => "c", "q9" => "a", "q10" => "a"
        ]
    ];

    $correct_answers = $answers[$subject] ?? [];

    $score = 0;
    $total = count($correct_answers);
    $results = [];

    foreach ($correct_answers as $q => $correct) {
        $user_answer = $_POST[$q] ?? 'No answer';
        $is_correct = ($user_answer === $correct);
        if ($is_correct) $score++;
        $results[$q] = [
            'your_answer' => $user_answer,
            'correct_answer' => $correct,
            'is_correct' => $is_correct
        ];
    }

    // Save result to database
    $stmt = $conn->prepare("INSERT INTO quiz_results (user_id, subject, score, total) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isii", $user_id, $subject, $score, $total);
    $stmt->execute();
    $stmt->close();
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title><?php echo htmlspecialchars($subject); ?> Quiz Result</title>
        <style>
            body {
                font-family: Arial, sans-serif;
               background: linear-gradient(to right,rgb(70, 63, 56),rgb(238, 233, 233));
                padding: 40px;
            }
            .result {
                max-width: 700px;
                margin: auto;
                background: #fff;
                padding: 25px 30px;
                border-radius: 15px;
                box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            }
            h2 {
                text-align: center;
                color: #333;
            }
            table {
                width: 100%;
                background: linear-gradient(to right,rgb(70, 63, 56),rgb(238, 233, 233));
                border-collapse: collapse;
                margin-top: 20px;
            }
            th, td {
                padding: 10px 15px;
                border: 1px solid #ddd;
                text-align: center;
            }
            th {
                background: #d35400;
                color: white;
            }
            .correct {
                background:rgb(253, 253, 253);
                color: #256029;
                font-weight: bold;
            }
            .wrong {
                background: #ffcdd2;    
                color: #c62828;
                font-weight: bold;
            }
            .score {
                font-size: 22px;
                font-weight: bold;
                text-align: center;
                margin-top: 20px;
            }
            a {
                display: block;
                margin: 30px auto 0;
                width: 150px;
                text-align: center;
                padding: 12px;
                background: #d35400;
                color: white;
                text-decoration: none;
                border-radius: 8px;
                transition: background 0.3s;
            }
            a:hover {
                background: #e67e22;
            }
        </style>
    </head>
    <body>
        <div class="result">
            <h2><?php echo htmlspecialchars($subject); ?> Quiz Result</h2>
            <div class="score">Your Score: <?php echo $score . " / " . $total; ?></div>

            <table>
                <tr>
                    <th>Question</th>
                    <th>Your Answer</th>
                    <th>Correct Answer</th>
                    <th>Result</th>
                </tr>
                <?php
                $qNum = 1;
                foreach ($results as $q => $res) {
                    $class = $res['is_correct'] ? "correct" : "wrong";
                    echo "<tr>";
                    echo "<td>Question $qNum</td>";
                    echo "<td>" . htmlspecialchars(strtoupper($res['your_answer'])) . "</td>";
                    echo "<td>" . htmlspecialchars(strtoupper($res['correct_answer'])) . "</td>";
                    echo "<td class='$class'>" . ($res['is_correct'] ? "Correct" : "Wrong") . "</td>";
                    echo "</tr>";
                    $qNum++;
                }
                ?>
            </table>

            <a href="dashboard.php">Back to Home Page</a>
        </div>
    </body>
    </html>
<?php
} else {
    header("Location: dashboard.php");
    exit;
}
?>
