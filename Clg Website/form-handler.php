<!-- <?php
$name=$_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_Post['message'];

$email_from = 'info@vaishkasargamil.com';
$email_subject = 'New Form Submission';
$email_body = "Useer Name: $name.\n".
              "Useer Name: $visitor_email.\n".
              "Useer Name: $subject.\n".
              "Useer Name: $message.\n".

$to = 'vaishnavikasar5@gmail.com';

$header = "Form: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?> -->

<!-- contact madhe action madhe jaun php file add karavi -->
<!-- form-handler.php method="post" -->