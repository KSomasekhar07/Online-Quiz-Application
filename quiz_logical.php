<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php"); // Redirect if not logged in
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Logical Reasoning Quiz</title>
    <style>
        body {
            font-family: Arial, sans-serif;
             background: linear-gradient(to right,rgb(184, 221, 162),rgb(176, 155, 226));
            padding: 30px;
            color: #333;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        form {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }
        .question {
            margin-bottom: 20px;
        }
        .question p {
            font-weight: bold;
            margin-bottom: 8px;
        }
        input[type="radio"] {
            margin-right: 8px;
        }
        input[type="submit"] {
            background: #007bff;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            display: block;
            margin: 30px auto 0;
        }
        input[type="submit"]:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<h2>Logical Reasoning Quiz - 10 Questions</h2>

<form action="process.php" method="POST">
    <input type="hidden" name="subject" value="Logical">

    <div class="question">
        <p>1. If all cats are animals, and some animals are dogs, which is true?</p>
        <label><input type="radio" name="q1" value="a" required> All dogs are cats</label><br>
        <label><input type="radio" name="q1" value="b"> Some cats are dogs</label><br>
        <label><input type="radio" name="q1" value="c"> Some animals are cats</label>
    </div>

    <div class="question">
        <p>2. Find the odd one out: Apple, Banana, Carrot, Mango</p>
        <label><input type="radio" name="q2" value="a" required> Apple</label><br>
        <label><input type="radio" name="q2" value="b"> Carrot</label><br>
        <label><input type="radio" name="q2" value="c"> Mango</label>
    </div>

    <div class="question">
        <p>3. What comes next in the series? 2, 4, 8, 16, ?</p>
        <label><input type="radio" name="q3" value="a" required> 18</label><br>
        <label><input type="radio" name="q3" value="b"> 32</label><br>
        <label><input type="radio" name="q3" value="c"> 24</label>
    </div>

    <div class="question">
        <p>4. If yesterday was Sunday, what day will be the day after tomorrow?</p>
        <label><input type="radio" name="q4" value="a" required> Monday</label><br>
        <label><input type="radio" name="q4" value="b"> Tuesday</label><br>
        <label><input type="radio" name="q4" value="c"> Wednesday</label>
    </div>

    <div class="question">
        <p>5. Which word does NOT belong to the group?</p>
        <label><input type="radio" name="q5" value="a" required> Car</label><br>
        <label><input type="radio" name="q5" value="b"> Bicycle</label><br>
        <label><input type="radio" name="q5" value="c"> Train</label>
    </div>

    <div class="question">
        <p>6. If 5 workers build 5 walls in 5 days, how many walls will 10 workers build in 10 days?</p>
        <label><input type="radio" name="q6" value="a" required> 10</label><br>
        <label><input type="radio" name="q6" value="b"> 20</label><br>
        <label><input type="radio" name="q6" value="c"> 25</label>
    </div>

    <div class="question">
        <p>7. What is the missing number? 3, 9, 27, ?, 243</p>
        <label><input type="radio" name="q7" value="a" required> 54</label><br>
        <label><input type="radio" name="q7" value="b"> 81</label><br>
        <label><input type="radio" name="q7" value="c"> 72</label>
    </div>

    <div class="question">
        <p>8. Which of these is a prime number?</p>
        <label><input type="radio" name="q8" value="a" required> 4</label><br>
        <label><input type="radio" name="q8" value="b"> 13</label><br>
        <label><input type="radio" name="q8" value="c"> 15</label>
    </div>

    <div class="question">
        <p>9. If you rearrange the letters "CIFAIPC", which word do you get?</p>
        <label><input type="radio" name="q9" value="a" required> Pacific</label><br>
        <label><input type="radio" name="q9" value="b"> Pacifica</label><br>
        <label><input type="radio" name="q9" value="c"> Pacifico</label>
    </div>

    <div class="question">
        <p>10. What comes next? 1, 1, 2, 3, 5, 8, ?</p>
        <label><input type="radio" name="q10" value="a" required> 13</label><br>
        <label><input type="radio" name="q10" value="b"> 12</label><br>
        <label><input type="radio" name="q10" value="c"> 15</label>
    </div>

    <input type="submit" value="Submit Quiz">
</form>

</body>
</html>
