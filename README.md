# Contact-Form-with-a-Honeypot
### A PHP - HTML - CSS Contact Form with a Honeypot instead of Captcha.

### Updated this to BOTH send you an email && write to database.
#### This uses PDO to write to your database.

In databse.php (spelling intentional) you need to change the following:
$user = '_do_not_use_root_';
$pass = '_something_unique_not_password_';

In form_process.php you need to change the following:
$to = '_You_@_Your_Email_._TLD';

Upload the form.sql into either the MySQL console or phpMyAdmin.
Upload the php and css on to your webserver and you are ready to rock-and-roll!
