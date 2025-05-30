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
    <title>Aptitude Quiz - Advanced</title>
    <style>
        body {
            font-family: Arial, sans-serif;
             background: linear-gradient(to right,rgb(162, 219, 221),rgb(155, 171, 226));
            padding: 30px;
            color: #333;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        form {
            max-width: 800px;
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

<h2>Aptitude Quiz - Advanced Questions</h2>

<form action="process.php" method="POST">
    <input type="hidden" name="subject" value="Aptitude">

    <div class="question">
        <p>1. A train 150 meters long is running at a speed of 45 km/hr. In how many seconds will it pass a platform 350 meters long?</p>
        <label><input type="radio" name="q1" value="a" required> 40 sec</label><br>
        <label><input type="radio" name="q1" value="b"> 45 sec</label><br>
        <label><input type="radio" name="q1" value="c"> 50 sec</label>
    </div>

    <div class="question">
        <p>2. If the ratio of the ages of A and B is 5:7 and the sum of their ages is 96, what will be the ratio of their ages after 8 years?</p>
        <label><input type="radio" name="q2" value="a" required> 13:15</label><br>
        <label><input type="radio" name="q2" value="b"> 15:17</label><br>
        <label><input type="radio" name="q2" value="c"> 17:19</label>
    </div>

    <div class="question">
        <p>3. The simple interest on a sum of money for 3 years at 8% per annum is $480. What is the principal amount?</p>
        <label><input type="radio" name="q3" value="a" required> $1800</label><br>
        <label><input type="radio" name="q3" value="b"> $1600</label><br>
        <label><input type="radio" name="q3" value="c"> $2000</label>
    </div>

    <div class="question">
        <p>4. A man sells an article at a profit of 20%. If he had bought it at 10% less and sold it for $10 less, he would have gained 25%. Find the cost price.</p>
        <label><input type="radio" name="q4" value="a" required> $200</label><br>
        <label><input type="radio" name="q4" value="b"> $220</label><br>
        <label><input type="radio" name="q4" value="c"> $240</label>
    </div>

    <div class="question">
        <p>5. Two pipes can fill a tank in 30 minutes and 40 minutes respectively. Both pipes are opened together, but the second pipe is closed after 10 minutes. How long will the tank take to fill?</p>
        <label><input type="radio" name="q5" value="a" required> 22.5 minutes</label><br>
        <label><input type="radio" name="q5" value="b"> 25 minutes</label><br>
        <label><input type="radio" name="q5" value="c"> 28 minutes</label>
    </div>

    <div class="question">
        <p>6. A shopkeeper marks his goods 20% above the cost price and allows a discount of 10%. What is his gain percentage?</p>
        <label><input type="radio" name="q6" value="a" required> 8%</label><br>
        <label><input type="radio" name="q6" value="b"> 10%</label><br>
        <label><input type="radio" name="q6" value="c"> 12%</label>
    </div>

    <div class="question">
        <p>7. If \( x^2 + y^2 = 25 \) and \( xy = 12 \), what is the value of \( x^4 + y^4 \)?</p>
        <label><input type="radio" name="q7" value="a" required> 169</label><br>
        <label><input type="radio" name="q7" value="b"> 289</label><br>
        <label><input type="radio" name="q7" value="c"> 625</label>
    </div>

    <div class="question">
        <p>8. Find the next number in the series: 2, 12, 30, 56, 90, ?</p>
        <label><input type="radio" name="q8" value="a" required> 132</label><br>
        <label><input type="radio" name="q8" value="b"> 110</label><br>
        <label><input type="radio" name="q8" value="c"> 156</label>
    </div>

    <div class="question">
        <p>9. The ratio of the volumes of two cylinders is 27:8. If the radius of the smaller cylinder is 6 cm, what is the height of the larger cylinder if its radius is 9 cm?</p>
        <label><input type="radio" name="q9" value="a" required> 16 cm</label><br>
        <label><input type="radio" name="q9" value="b"> 18 cm</label><br>
        <label><input type="radio" name="q9" value="c"> 24 cm</label>
    </div>

    <div class="question">
        <p>10. A number when increased by 25% and then decreased by 20% gives 150. What is the original number?</p>
        <label><input type="radio" name="q10" value="a" required> 160</label><br>
        <label><input type="radio" name="q10" value="b"> 180</label><br>
        <label><input type="radio" name="q10" value="c"> 200</label>
    </div>

    <input type="submit" value="Submit Quiz">
</form>

</body>
</html>
