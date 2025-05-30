<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $reg_no = $_POST['regno'];
    $department = $_POST['department'];
    $message = $_POST['message'];

    $stmt = $conn->prepare("INSERT INTO contact_messages (name, mobile, email, reg_no, department, message) VALUES (?, ?, ?, ?, ?, ?)");
    
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("ssssss", $name, $mobile, $email, $reg_no, $department, $message);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    // Show message and redirect
    echo "
    <!DOCTYPE html>
    <html>
    <head>
        <title>Thank You</title>
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                font-family: Arial, sans-serif;
                background: #f0f8ff;
                margin: 0;
            }
            .message {
                text-align: center;
                padding: 40px;
                background: #ffffff;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
            }
            .message h2 {
                color: #28a745;
            }
        </style>
        <script>
            setTimeout(function() {
                window.location.href = 'about.php';
            }, 3000);
        </script>
    </head>
    <body>
        <div class='message'>
            <h2>Thank you for contacting us!</h2>
            <p>Our team will solve your problem as soon as possible...</p>
            <p>You will be redirected shortly.</p>
        </div>
    </body>
    </html>";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <style>
        * {
            box-sizing: border-box;
        }

        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
        }

        body {
            background: url('contact.avif') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .form-container {
            width: 100%;
            max-width: 900px;
            padding: 40px;
            border-radius: 12px;
            margin-right: 10%;
            backdrop-filter: blur(5px);
            color: white;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color:black;
            text-shadow: 1px 1px 3px white;
            font-size:35px;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 8px;
            border: none;
            font-size: 14px;
            background-color: rgba(255, 255, 255, 0.9);
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #ff6b81;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #ff4d6d;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Contact Us</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="mobile" placeholder="Mobile Number" pattern="[0-9]{10}" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="regno" placeholder="Register Number (or enter USER)" required>
        <input type="text" name="department" placeholder="Department" required>
        <textarea name="message" placeholder="Message" rows="4" required></textarea>
        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
