<!DOCTYPE html>
<html>
<head>
    <title>Quiz Application</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Simple PHP Quiz</h2>
    <form action="process.php" method="POST">
        <div class="question">
            <p>1. What does PHP stand for?</p>
            <input type="radio" name="q1" value="a"> Personal Home Page<br>
            <input type="radio" name="q1" value="b"> Private Home Page<br>
            <input type="radio" name="q1" value="c"> PHP: Hypertext Preprocessor<br>
        </div>

        <div class="question">
            <p>2. Which of the following is a server-side language?</p>
            <input type="radio" name="q2" value="a"> JavaScript<br>
            <input type="radio" name="q2" value="b"> PHP<br>
            <input type="radio" name="q2" value="c"> HTML<br>
        </div>

        <div class="question">
            <p>3. What symbol is used to declare a variable in PHP?</p>
            <input type="radio" name="q3" value="a"> @<br>
            <input type="radio" name="q3" value="b"> $<br>
            <input type="radio" name="q3" value="c"> #<br>
        </div>

        <input type="submit" value="Submit Quiz">
    </form>
</body>
</html>
