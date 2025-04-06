<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reach Out to Us</title>
    
    <style>
        body {
            margin: 0;
            overflow: hidden; 
            background-image: url("bg1.jpg");
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
            position: relative; /* Needed for pseudo-element */
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden; /* Ensures the background does not overflow */
        }

        /* Adding background image */
        .contact-form::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('www.jpg'); 
            background-size: cover;
            background-position: center;
            opacity: 0.4; /* Adjust this to change the image transparency */
            z-index: -2; /* Keeps the background behind everything */
            border-radius: 10px; /* Matches the form's border-radius */
        }

        .contact-form::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 165, 0, 0.3); /* Orange overlay with 30% transparency */
            z-index: -1; /* Keeps overlay above the image but behind text */
            border-radius: 10px; /* Matches the form's border-radius */
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
            background: orange; 
            color: white;
        }

        .clear-btn {
            background: orange; 
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
