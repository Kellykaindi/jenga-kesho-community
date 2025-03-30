<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continuous Smooth Image Wave</title>
    
    <style>
        body {
            margin: 0;
            overflow: hidden; 
            background-image: url("jkcindex.gif");
            background-repeat: no-repeat;
            background-size: cover; /* Ensures full background */
            background-position: center;
            font-family: Arial, sans-serif;
        }

        /* Form Styling */
        .contact-form {
            width: 40%;
            margin: 50px auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .contact-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .contact-form label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        .contact-form input, 
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact-form button {
            margin-top: 15px;
            padding: 10px;
            width: 48%;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .submit-btn {
            background-color: #28a745;
            color: white;
        }

        .clear-btn {
            background-color: #dc3545;
            color: white;
        }

        .contact-form button:hover {
            opacity: 0.8;
        }
    </style>

    <?php include 'header1.php'; ?>
</head>

<body>

    <div class="contact-form">
        <h2>Contact Us</h2>
        <form action="submit_form.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit" class="submit-btn">Submit</button>
            <button type="reset" class="clear-btn">Clear Form</button>
        </form>
    </div>

</body>
</html>
