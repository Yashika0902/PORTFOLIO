
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <?php
    // Display form if it is not submitted
    if (!isset($_POST['submit'])) {
        ?>
        <h2>Contact Form</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required><br><br>
            
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br><br>
            
            <label for="message">Message:</label><br>
            <textarea name="message" id="message" rows="5" required></textarea><br><br>
            
            <input type="submit" name="submit" value="Submit">
        </form>
        <?php
    } else {
        // Process form data when submitted
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        // Email address where the message will be sent
        $to = "sumati0902@gmail.com";
        
        // Subject of the email
        $subject = "New Message from Contact Form";
        
        // Construct the email headers
        $headers = "From: $name <$email>" . "\r\n" .
                   "Reply-To: $email" . "\r\n" .
                   "X-Mailer: PHP/" . phpversion();
        
        // Send the email
        if (mail($to, $subject, $message, $headers)) {
            echo "<h2>Thank you for your message!</h2>";
        } else {
            echo "<h2>Sorry, there was an error sending your message.</h2>";
        }
    }
    ?>
</body>
</html>
```
