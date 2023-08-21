<?php
$to = "shadabansari14321@gmail.com";
$subject = "Test Email";
$message = '<html>
<head>
    <title>HTML Email</title>
</head>
<body>
    <h1>Table Example</h1>
    <p>This is an HTML email sent from PHP with a table:</p>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>Shadab Ansari</td>
            <td>shadabansari14321@gmail.com</td>
        </tr>
        <tr>
            <td>Rocky Ansari</td>
            <td>rockyansari14321@gmail.com</td>
        </tr>
    </table>
</body>
</html>';

// Additional headers for HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=utf-8" . "\r\n";

if(mail($to, $subject, $message, $headers)){
    echo "Email successfully sent to $to...";
} else {
    echo "Email sending failed to $to";
}


?>
