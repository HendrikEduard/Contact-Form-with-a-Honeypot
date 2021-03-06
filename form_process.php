<?php 
require_once 'databse.php';
// define variables and set to empty values
$name_error = $email_error = $phone_error = $salary_error = "";
$name = $email = $phone = $message = $salary = $success = "";

function clean($data) {
  $data = strip_tags($data);
  $data = htmlentities($data, ENT_QUOTES, 'UTF-8');
  $data = trim($data);
  return $data;
}

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (!empty($_POST["salary"])) {
    die();
  }

  if (empty($_POST["name"])) {
    $name_error = "Your name is required";
  } else {
    $name = clean($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
      $name_error = "Only letters and a space are allowed"; 
    }
  }

  if (empty($_POST["email"])) {
    $email_error = "Your email is required";
  } else {
    $email = filter_var(strip_tags($_POST["email"]), FILTER_SANITIZE_EMAIL);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Invalid email format"; 
    }
  }
  
  if (empty($_POST["phone"])) {
    $phone_error = "Your phone is required";
  } else {
    $phone = clean($_POST["phone"]);
    // check if phone number is digits
    if (!preg_match("/^[0-9 ]*$/", $phone)) {
      $phone_error = "Only numbers and spaces are allowed"; 
    }
  }

  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = clean($_POST["message"]);
  }

  if ($name_error == '' && $email_error == '' && $phone_error == ''){
      unset($_POST['submit']);
      $to = '_You_@_Your_Email_._TLD';
      $subject = 'Contact Form Submission';      
      $message_body .="Name: $name \n\n Phone: $phone \n\n Email: $email \n\nmessage: $message";
      $headers = 'From: ' .' <'.$to.'>' . "\r\n" . 'Reply-To: ' . $email;
    
      if (!mail($to, $subject, $message_body)) {
        echo 'Message could not be sent.';
    } else {
      $sql = 'INSERT INTO emails(fullname, email, phone, message) VALUES( ?, ?, ?, ?)';
      $stmt = $pdo->prepare($sql);
      $stmt->execute([$name, $email, $phone, $message]);
      $inserted = $stmt->rowCount();
      if($inserted > 0){
      $success = "Message sent, thank you for contacting us!";
      $name = $email = $phone = $message = '';
      } else {
        $success = 'An error occured, please try again later.';
      }
    }
  }
}
