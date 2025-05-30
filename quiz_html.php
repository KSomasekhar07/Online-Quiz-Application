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
    <title>HTML Quiz</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #fbc2eb, #a6c1ee);
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
            background: #00b894;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background: #019875;
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
    <h2>HTML Quiz - 10 Questions</h2>
    <form action="process.php" method="POST">
        <input type="hidden" name="subject" value="HTML">

        <div class="question">
            <p>1. What does HTML stand for?</p>
            <input type="radio" name="q1" value="a"> Hyper Tool Markup Language<br>
            <input type="radio" name="q1" value="b"> Hyper Text Markup Language<br>
            <input type="radio" name="q1" value="c"> Home Tool Markup Language<br>
        </div>

        <div class="question">
            <p>2. Choose the correct HTML element for the largest heading:</p>
            <input type="radio" name="q2" value="a"> &lt;head&gt;<br>
            <input type="radio" name="q2" value="b"> &lt;h6&gt;<br>
            <input type="radio" name="q2" value="c"> &lt;h1&gt;<br>
        </div>

        <div class="question">
            <p>3. What is the correct HTML element for inserting a line break?</p>
            <input type="radio" name="q3" value="a"> &lt;br&gt;<br>
            <input type="radio" name="q3" value="b"> &lt;lb&gt;<br>
            <input type="radio" name="q3" value="c"> &lt;break&gt;<br>
        </div>

        <div class="question">
            <p>4. Which element is used to define a table row?</p>
            <input type="radio" name="q4" value="a"> &lt;tr&gt;<br>
            <input type="radio" name="q4" value="b"> &lt;td&gt;<br>
            <input type="radio" name="q4" value="c"> &lt;table&gt;<br>
        </div>

        <div class="question">
            <p>5. How can you make a numbered list?</p>
            <input type="radio" name="q5" value="a"> &lt;ul&gt;<br>
            <input type="radio" name="q5" value="b"> &lt;ol&gt;<br>
            <input type="radio" name="q5" value="c"> &lt;list&gt;<br>
        </div>

        <div class="question">
            <p>6. Which tag is used to define a hyperlink?</p>
            <input type="radio" name="q6" value="a"> &lt;link&gt;<br>
            <input type="radio" name="q6" value="b"> &lt;a&gt;<br>
            <input type="radio" name="q6" value="c"> &lt;href&gt;<br>
        </div>

        <div class="question">
            <p>7. What is the correct HTML for adding a background color?</p>
            <input type="radio" name="q7" value="a"> &lt;body bg="yellow"&gt;<br>
            <input type="radio" name="q7" value="b"> &lt;body style="background-color:yellow;"&gt;<br>
            <input type="radio" name="q7" value="c"> &lt;background>yellow&lt;/background&gt;<br>
        </div>

        <div class="question">
            <p>8. Which HTML element defines the title of a document?</p>
            <input type="radio" name="q8" value="a"> &lt;meta&gt;<br>
            <input type="radio" name="q8" value="b"> &lt;title&gt;<br>
            <input type="radio" name="q8" value="c"> &lt;head&gt;<br>
        </div>

        <div class="question">
            <p>9. How can you make text bold?</p>
            <input type="radio" name="q9" value="a"> &lt;strong&gt;<br>
            <input type="radio" name="q9" value="b"> &lt;bold&gt;<br>
            <input type="radio" name="q9" value="c"> &lt;em&gt;<br>
        </div>

        <div class="question">
            <p>10. What is the correct HTML for inserting an image?</p>
            <input type="radio" name="q10" value="a"> &lt;img href="image.jpg"&gt;<br>
            <input type="radio" name="q10" value="b"> &lt;img src="image.jpg" alt="desc"&gt;<br>
            <input type="radio" name="q10" value="c"> &lt;image src="image.jpg"&gt;<br>
        </div>

        <input type="submit" value="Submit Quiz">
    </form>
</body>
</html>
