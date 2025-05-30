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
    <title>Networking Quiz - Advanced</title>
    <style>
        body {
            font-family: Arial, sans-serif;
             background: linear-gradient(to right,rgb(221, 162, 162),rgb(155, 171, 226));
            padding: 30px;
            color: #222;
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
            box-shadow: 0 0 15px #90caf9;
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
            background: #2196f3;
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
            background: #0b7dda;
        }
    </style>
</head>
<body>

<h2>Networking Quiz - Advanced Questions</h2>

<form action="process.php" method="POST">
    <input type="hidden" name="subject" value="Networking">

    <div class="question">
        <p>1. Which of the following protocols is used for secure communication over the internet by encrypting data?</p>
        <label><input type="radio" name="q1" value="a" required> HTTP</label><br>
        <label><input type="radio" name="q1" value="b"> HTTPS</label><br>
        <label><input type="radio" name="q1" value="c"> FTP</label>
    </div>

    <div class="question">
        <p>2. In subnetting, what is the subnet mask for a Class C network with 6 subnet bits?</p>
        <label><input type="radio" name="q2" value="a" required> 255.255.255.192</label><br>
        <label><input type="radio" name="q2" value="b"> 255.255.255.224</label><br>
        <label><input type="radio" name="q2" value="c"> 255.255.255.240</label>
    </div>

    <div class="question">
        <p>3. What layer of the OSI model is responsible for establishing, managing, and terminating connections between applications?</p>
        <label><input type="radio" name="q3" value="a" required> Transport Layer</label><br>
        <label><input type="radio" name="q3" value="b"> Session Layer</label><br>
        <label><input type="radio" name="q3" value="c"> Network Layer</label>
    </div>

    <div class="question">
        <p>4. Which IP address class provides a default subnet mask of 255.0.0.0?</p>
        <label><input type="radio" name="q4" value="a" required> Class A</label><br>
        <label><input type="radio" name="q4" value="b"> Class B</label><br>
        <label><input type="radio" name="q4" value="c"> Class C</label>
    </div>

    <div class="question">
        <p>5. What protocol is commonly used for mapping a hostname to its IP address?</p>
        <label><input type="radio" name="q5" value="a" required> DHCP</label><br>
        <label><input type="radio" name="q5" value="b"> DNS</label><br>
        <label><input type="radio" name="q5" value="c"> ARP</label>
    </div>

    <div class="question">
        <p>6. Which of the following is NOT a feature of TCP protocol?</p>
        <label><input type="radio" name="q6" value="a" required> Connection-oriented communication</label><br>
        <label><input type="radio" name="q6" value="b"> Reliable delivery</label><br>
        <label><input type="radio" name="q6" value="c"> Broadcast transmission</label>
    </div>

    <div class="question">
        <p>7. Which technology allows multiple VLANs to share a single physical switch port?</p>
        <label><input type="radio" name="q7" value="a" required> VLAN trunking</label><br>
        <label><input type="radio" name="q7" value="b"> Port mirroring</label><br>
        <label><input type="radio" name="q7" value="c"> Link aggregation</label>
    </div>

    <div class="question">
        <p>8. Which IP address is reserved for loopback testing?</p>
        <label><input type="radio" name="q8" value="a" required> 0.0.0.0</label><br>
        <label><input type="radio" name="q8" value="b"> 127.0.0.1</label><br>
        <label><input type="radio" name="q8" value="c"> 255.255.255.255</label>
    </div>

    <div class="question">
        <p>9. Which protocol is used to automatically assign IP addresses to devices on a network?</p>
        <label><input type="radio" name="q9" value="a" required> DNS</label><br>
        <label><input type="radio" name="q9" value="b"> DHCP</label><br>
        <label><input type="radio" name="q9" value="c"> SMTP</label>
    </div>

    <div class="question">
        <p>10. In IPv6 addressing, how many bits are used in an address?</p>
        <label><input type="radio" name="q10" value="a" required> 64 bits</label><br>
        <label><input type="radio" name="q10" value="b"> 128 bits</label><br>
        <label><input type="radio" name="q10" value="c"> 256 bits</label>
    </div>

    <input type="submit" value="Submit Quiz">
</form>

</body>
</html>
