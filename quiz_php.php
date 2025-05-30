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
    <title>PHP Quiz</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right,rgb(179, 162, 221),rgb(155, 171, 226));
            padding: 40px;
            animation: fadeIn 1s ease-in;
        }

        h2 {
            text-align: center;
            color: #333;
            animation: slideDown 0.8s ease-in-out;
        }

        form {
            max-width: 700px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            animation: slideUp 0.6s ease forwards;
        }

        .question {
            margin-bottom: 20px;
        }

        .question p {
            font-weight: bold;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        input[type="submit"] {
            background: #5c67f2;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background: #4a54e1;
        }

        @keyframes slideUp {
            from { transform: translateY(30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes slideDown {
            from { transform: translateY(-30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <h2>PHP Quiz - 10 Questions</h2>
    <form action="process.php" method="POST">
        <input type="hidden" name="subject" value="PHP">

        <div class="question">
            <p>1. What does PHP stand for?</p>
            <input type="radio" name="q1" value="a"> Personal Home Page<br>
            <input type="radio" name="q1" value="b"> Private Home Page<br>
            <input type="radio" name="q1" value="c"> PHP: Hypertext Preprocessor<br>
        </div>

        <div class="question">
            <p>2. Which of these is a correct variable in PHP?</p>
            <input type="radio" name="q2" value="a"> $var_name<br>
            <input type="radio" name="q2" value="b"> varName<br>
            <input type="radio" name="q2" value="c"> @var<br>
        </div>

        <div class="question">
            <p>3. Which function is used to output text in PHP?</p>
            <input type="radio" name="q3" value="a"> echo<br>
            <input type="radio" name="q3" value="b"> out<br>
            <input type="radio" name="q3" value="c"> printText<br>
        </div>

        <div class="question">
            <p>4.Who is the father of PHP?</p>
            <input type="radio" name="q4" value="a"> Rasmus Lerdorf<br>
            <input type="radio" name="q4" value="b"> List Barely<br>
            <input type="radio" name="q4" value="c"> Drek Kolkevi<br>
        </div>

        <div class="question">
            <p>5. What is the correct way to end a PHP statement?</p>
            <input type="radio" name="q5" value="a"> :<br>
            <input type="radio" name="q5" value="b"> ;<br>
            <input type="radio" name="q5" value="c"> .<br>
        </div>

        <div class="question">
            <p>6. Which function is used to get the length of a string?</p>
            <input type="radio" name="q6" value="a"> count()<br>
            <input type="radio" name="q6" value="b"> strlen()<br>
            <input type="radio" name="q6" value="c"> size()<br>
        </div>

        <div class="question">
            <p>7. How do you create a function in PHP?</p>
            <input type="radio" name="q7" value="a"> create myFunction() {}<br>
            <input type="radio" name="q7" value="b"> function myFunction() {}<br>
            <input type="radio" name="q7" value="c"> define myFunction() {}<br>
        </div>

        <div class="question">
            <p>8. Which super global variable holds form data?</p>
            <input type="radio" name="q8" value="a"> $_GET<br>
            <input type="radio" name="q8" value="b"> $_POST<br>
            <input type="radio" name="q8" value="c"> $_FORM<br>
        </div>

        <div class="question">
            <p>9. Which symbol is used for concatenation in PHP?</p>
            <input type="radio" name="q9" value="a"> +<br>
            <input type="radio" name="q9" value="b"> -<br>
            <input type="radio" name="q9" value="c"> &<br>
        </div>

        <div class="question">
            <p>10. What will `isset($var)` return if $var is set?</p>
            <input type="radio" name="q10" value="a"> false<br>
            <input type="radio" name="q10" value="b"> 0<br>
            <input type="radio" name="q10" value="c"> true<br>
        </div>

        <input type="submit" value="Submit Quiz">
    </form>
</body>
</html>
