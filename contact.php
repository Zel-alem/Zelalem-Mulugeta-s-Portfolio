<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form fields and sanitize them
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Define the email content
    $to = "zelalemmisganaw1994@gmail.com"; 
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-type: text/html; charset=UTF-8";
    
    $email_subject = "New message from $name: $subject";
    $email_body = "
        <h2>Contact Form Submission</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Subject:</strong> $subject</p>
        <p><strong>Message:</strong><br>$message</p>
    ";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "<p>Message sent successfully!</p>";
    } else {
        echo "<p>Message failed to send.</p>";
    }
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form fields and sanitize them
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Output the received form data for testing
    echo "<h2>Form Data Received:</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Subject:</strong> $subject</p>";
    echo "<p><strong>Message:</strong><br>$message</p>";
}
?>
