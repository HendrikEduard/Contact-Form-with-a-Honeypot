<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Us</title>
</head>
<body>
<?php require_once 'form_process.php' ?>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="container">  
  <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <h3>Contact Us</h3>
    <div><label for="name">Your Name</label>
      <input placeholder="Your name" type="text" name="name" value="<?= $name ?>" tabindex="1" autofocus>
      <span class="error"><?= $name_error ?></span>
    </div>
    <div><label for="email">Your Email</label>
      <input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>" tabindex="2">
      <span class="error"><?= $email_error ?></span>
    </div>
    <div><label for="phone">Your Phone</label>
      <input placeholder="Your Phone Number" type="text" name="phone" value="<?= $phone ?>" tabindex="3">
      <span class="error"><?= $phone_error ?></span>
    </div>
    <div><label for="message">Your message</label>
      <textarea placeholder="Your Phone Number" value="<?= $message ?>" name="message" tabindex="4">
      </textarea>
    </div>
    <div>
    <input placeholder="Your annual salary" type="salary" name="salary" value="<?= $salary ?>" tabindex="">
      <span class="error"><?= $salary_error ?></span>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </div>
    <div class="success"><?= $success ?></div>
  </form>
</div>
</body>
</html>