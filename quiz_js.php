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
    <title>JavaScript Quiz</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ffecd2, #fcb69f);
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
            background: #d35400;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background: #e67e22;
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
    <h2>JavaScript Quiz - 10 Questions</h2>
    <form action="process.php" method="POST">
        <input type="hidden" name="subject" value="JavaScript">

        <div class="question">
            <p>1. Which company developed JavaScript?</p>
            <input type="radio" name="q1" value="a"> Microsoft<br>
            <input type="radio" name="q1" value="b"> Netscape<br>
            <input type="radio" name="q1" value="c"> Google<br>
        </div>

        <div class="question">
            <p>2. Which symbol is used for comments in JavaScript?</p>
            <input type="radio" name="q2" value="a"> // and /* */<br>
            <input type="radio" name="q2" value="b"> <!-- --> <br>
            <input type="radio" name="q2" value="c"> # <br>
        </div>

        <div class="question">
            <p>3. How do you declare a variable in JavaScript?</p>
            <input type="radio" name="q3" value="a"> var, let or const<br>
            <input type="radio" name="q3" value="b"> variable<br>
            <input type="radio" name="q3" value="c"> dim<br>
        </div>

        <div class="question">
            <p>4. What is the output of: console.log(typeof null)?</p>
            <input type="radio" name="q4" value="a"> "null"<br>
            <input type="radio" name="q4" value="b"> "object"<br>
            <input type="radio" name="q4" value="c"> "undefined"<br>
        </div>

        <div class="question">
            <p>5. Which method is used to parse a string to an integer?</p>
            <input type="radio" name="q5" value="a"> parseInt()<br>
            <input type="radio" name="q5" value="b"> intParse()<br>
            <input type="radio" name="q5" value="c"> toInteger()<br>
        </div>

        <div class="question">
            <p>6. How do you write a function in JavaScript?</p>
            <input type="radio" name="q6" value="a"> function myFunction() {}<br>
            <input type="radio" name="q6" value="b"> def myFunction() {}<br>
            <input type="radio" name="q6" value="c"> function:myFunction() {}<br>
        </div>

        <div class="question">
            <p>7. How can you add a comment that spans multiple lines?</p>
            <input type="radio" name="q7" value="a"> // comment <br>
            <input type="radio" name="q7" value="b"> /* comment */<br>
            <input type="radio" name="q7" value="c"> <!-- comment --> <br>
        </div>

        <div class="question">
            <p>8. What does the '===' operator mean?</p>
            <input type="radio" name="q8" value="a"> Equality without type conversion<br>
            <input type="radio" name="q8" value="b"> Assignment<br>
            <input type="radio" name="q8" value="c"> Equality with type conversion<br>
        </div>

        <div class="question">
            <p>9. Which event occurs when the user clicks on an HTML element?</p>
            <input type="radio" name="q9" value="a"> onclick<br>
            <input type="radio" name="q9" value="b"> onchange<br>
            <input type="radio" name="q9" value="c"> onmouseover<br>
        </div>

        <div class="question">
            <p>10. How do you declare an array in JavaScript?</p>
            <input type="radio" name="q10" value="a"> var arr = [];<br>
            <input type="radio" name="q10" value="b"> var arr = ();<br>
            <input type="radio" name="q10" value="c"> var arr = {};<br>
        </div>

        <input type="submit" value="Submit Quiz">
    </form>
</body>
</html>
